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
            <h2>Form Control</h2>
            <div class="mb-2">
                <x-bs::form.control
                    label="Notes"
                    type="textarea"
                    rows="3"
                    name="notes"
                    help="Put any arbitrary information here."/>
            </div>
        </main>
        @bootstrap_js
    </body>
</html>
