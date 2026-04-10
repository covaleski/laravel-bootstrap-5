# Laravel Bootstrap 5 Components

Bootstrap 5 Blade components for Laravel.

## Installation

Install the library using the Composer package manager:

```sh
composer require covaleski/laravel-bootstrap-5
```

## Usage

First, include Bootstrap CSS assets to the view using the `@bootstrap-css`
Blade directive:

```html
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @bootstrap-css
        <title>Bootstrap demo</title>
    </head>
    <body>
        <h1>Hello, world!</h1>
    </body>
</html>
```

If you also intend to use Bootstrap's JavaScript features, also include the
`@boostrap-js` directive to your view:

```html
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @bootstrap-css
        <title>Bootstrap demo</title>
    </head>
    <body>
        <h1>Hello, world!</h1>
        @bootstrap-js
    </body>
</html>
```

Then use published views as regular Laravel components:

```html
<x-bootstrap.alert color="primary">
    A simple primary alert—check it out!
</x-bootstrap.alert>
```

See all available components in [Components](./COMPONENTS.md).

## Configuration

By default, Bootstrap assets are loaded via CDN, but you can change it
in the `config/boostrap.php` configuration file.
