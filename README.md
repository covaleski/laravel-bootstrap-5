# Laravel Bootstrap 5 Components

Bootstrap 5 Blade components for Laravel.

## Installation

Install this package using the Composer package manager:

```sh
composer require covaleski/laravel-bootstrap-5
```

## Usage

First, include CSS and JS assets to the view using the `@bootstrap_css` and
`@bootstrap_js` directives:

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
        @bootstrap_js
    </body>
</html>
```

> If you intend to preload Bootstrap's stylesheets, use the
> `@bootstrap_css_preload` directive. Place it somewhere before the
> `@bootstrap_css` directive.

After including assets to the view, add the components you want to your Blade
templates:

```html
<x-bs::alert primary>
    A simple primary alert—check it out!
</x-bs::alert>
```

See all available components in [Components](./COMPONENTS.md).

## Configuration

By default, Bootstrap assets are loaded via CDN. You can change it in the
`config/bootstrap.php` configuration file.
