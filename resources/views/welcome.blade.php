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
        </main>
        @bootstrap_js
    </body>
</html>
