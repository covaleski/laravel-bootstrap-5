<?php

use App\Models\User;

return [

    /*
    |--------------------------------------------------------------------------
    | CSS Link Element Attributes
    |--------------------------------------------------------------------------
    |
    | This option defines the default Bootstrap CSS stylesheet link attributes.
    |
    */

    'css' => [
        'rel' => 'stylesheet',
        'href' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        'hash' => 'sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB',
        'crossorigin' => 'anonymous',
    ],

    /*
    |--------------------------------------------------------------------------
    | JS Script Element Attributes
    |--------------------------------------------------------------------------
    |
    | This option defines the default Bootstrap CSS script attributes.
    |
    */

    'js' => [
        'type' => 'text/javascript',
        'src' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        'hash' => 'sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI',
        'crossorigin' => 'anonymous',
        'defer' => true,
    ],

];
