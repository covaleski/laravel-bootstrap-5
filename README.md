# Laravel Bootstrap 5 Components

Bootstrap 5 Blade components for Laravel.

## Installation

Install this package using the Composer package manager:

```sh
composer require covaleski/laravel-bootstrap-5
```

## Usage

First, include Bootstrap CSS assets to the view using the `@bootstrap_css`
Blade directive:

```html
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @bootstrap_css
        <title>Bootstrap demo</title>
    </head>
    <body>
        <h1>Hello, world!</h1>
    </body>
</html>
```

If you also intend to use Bootstrap's JavaScript features, also include the
`@bootstrap_js` directive to your view:

```html
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @bootstrap_css
        <title>Bootstrap demo</title>
    </head>
    <body>
        <h1>Hello, World!</h1>
        @bootstrap_js
    </body>
</html>
```

Then use published views as regular Laravel components:

```html
<x-bs::alert color="primary">
    A simple primary alert—check it out!
</x-bs::alert>
```

See all available components in [Components](./COMPONENTS.md).

## Configuration

By default, Bootstrap assets are loaded via CDN, but you can change it
in the `config/bootstrap.php` configuration file.
