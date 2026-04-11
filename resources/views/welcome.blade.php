<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @bootstrap_css
        <title>Bootstrap demo</title>
    </head>
    <body>
        <main class="container">
            <h1>Components</h1>
            <p>See some of the available components.</p>
            <h2>Alert</h2>
            <x-bs::alert variant="success" dismissible>
                This is an important message.
            </x-bs::alert>
            <h2>Form Check</h2>
            <h3>Checkboxes</h3>
            <div class="mb-2">
                <x-bs::form.check label="Option A" name="check-value[]"/>
                <x-bs::form.check label="Option B" name="check-value[]"/>
                <x-bs::form.check label="Option C" name="check-value[]" checked/>
                <x-bs::form.check label="Option D" name="check-value[]" disabled/>
                <x-bs::form.check label="Option E" name="check-value[]" checked disabled/>
            </div>
            <h3>Radios</h3>
            <div class="mb-2">
                <x-bs::form.check label="Option A" name="radio-value" radio/>
                <x-bs::form.check label="Option B" name="radio-value" radio checked/>
                <x-bs::form.check label="Option C" name="radio-value" radio disabled/>
            </div>
            <h3>Switches</h3>
            <div class="mb-2">
                <x-bs::form.check label="Option A" name="check-value[]" switch/>
                <x-bs::form.check label="Option B" name="check-value[]" switch/>
                <x-bs::form.check label="Option C" name="check-value[]" switch checked/>
                <x-bs::form.check label="Option D" name="check-value[]" switch disabled/>
                <x-bs::form.check label="Option E" name="check-value[]" switch checked disabled/>
            </div>
            <h2>Form Control</h2>
            <div class="mb-2">
                <x-bs::form.control
                    label="Notes"
                    type="textarea"
                    rows="3"
                    help="Put any arbitrary information here."/>
            </div>
            <h2>Form Range</h2>
            <div class="mb-2">
                <x-bs::form.range
                    label="Volume"
                    min="0"
                    max="100"
                    step="20"
                    value="20"/>
            </div>
            <h2>Form Select</h2>
            <div class="mb-2">
                <x-bs::form.select
                    label="Subscription"
                    help="Select one of the available options.">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </x-bs::form.select>
            </div>
        </main>
        @bootstrap_js
    </body>
</html>
