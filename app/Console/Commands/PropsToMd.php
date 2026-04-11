<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

#[Signature('app:props-to-md {component}')]
#[Description('Create a Markdown table template for the component props.')]
class PropsToMd extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $component = $this->argument('component');
        $root = base_path('resources/views/components');
        $disk = Storage::build(['driver' => 'local', 'root' => $root]);
        $path = Str::replace('.', '/', $component) . '.blade.php';
        $data = $disk->get($path);
        $pattern = '/^(\'|")(.*)(\'|")\s+=>\s+((\'|")?.*(\'|")?),$/';
        $props = [];
        $in_props = false;
        foreach (str($data)->explode("\n") as $line) {
            $line = trim($line);
            if (Str::startsWith($line, '@props([')) {
                $in_props = true;
            } elseif ($in_props && Str::startsWith($line, '])')) {
                break;
            } elseif ($in_props && preg_match($pattern, $line, $matches) === 1) {
                $key = $matches[2];
                $value = $matches[4];
                $props["`{$key}`"] = match ($value) {
                    'true' => 'Present',
                    'false' => 'Absent',
                    'null' => 'None',
                    default => "`{$value}`",
                };
            }
        }
        $this->line('| Attribute | Default | Description |');
        $this->line('| --- | --- | --- |');
        foreach ($props as $key => $value) {
            $this->line("| {$key} | {$value} | YOUR_DESCRIPTION |");
        }
    }
}
