<?php

if (!function_exists('variants')) {
    function variants(): array
    {
        $available = config('bootstrap.variants.available');
        return array_combine(
            $available,
            array_fill(0, count($available), false),
        );
    }
}
