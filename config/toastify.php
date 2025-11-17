<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Toastify CDN links
    |--------------------------------------------------------------------------
    */

    'cdn' => [
        'js' => 'https://unpkg.com/toastify-js@1.12.0/src/toastify.js',
        'css' => 'https://unpkg.com/toastify-js@1.12.0/src/toastify.css',
    ],

    /*
    |--------------------------------------------------------------------------
    | Toastify Toastifiers Options
    |--------------------------------------------------------------------------
    |
    | Aquí se define tu componente reutilizable 'sweet-success'.
    |
    */
    'toastifiers' => [
        'toast' => [
            'style' => [
                'color' => '#fff',
                'background' => '#182433',
            ],
        ],
        'error' => [
            'duration' => 3000,
            'gravity' => 'top',
            'position' => 'right',
            'close' => true,
            'stopOnFocus' => true,
            'style' => [
                'background' => '#ffffff',
                'color' => '#545454',
                'font-size' => '16px',
                'font-weight' => '400',
                'border-radius' => '8px',
                'box-shadow' => '0 0 12px rgba(0,0,0,0.15)',
                'padding' => '16px 20px',
                'min-width' => '300px',
                'text-align' => 'left',
                'border-left' => '5px solid #f44336',
            ],
            'className' => 'toast-sweetalert-style toast-sweetalert-error',
        ],
        'success' => [
            'duration' => 3000,
            'gravity' => 'top',
            'position' => 'right',
            'close' => true,
            'stopOnFocus' => true,
            'style' => [
                'background' => '#ffffff',
                'color' => '#545454',
                'font-size' => '16px',
                'font-weight' => '400',
                'border-radius' => '8px',
                'box-shadow' => '0 0 12px rgba(0,0,0,0.15)',
                'padding' => '16px 20px',
                'min-width' => '300px',
                'text-align' => 'left',
                'border-left' => '5px solid #4CAF50',
            ],
            'className' => 'toast-sweetalert-style',
        ],
        'info' => [
            'duration' => 3000,
            'gravity' => 'top',
            'position' => 'right',
            'close' => true,
            'stopOnFocus' => true,
            'style' => [
                'background' => '#ffffff',
                'color' => '#545454',
                'font-size' => '16px',
                'font-weight' => '400',
                'border-radius' => '8px',
                'box-shadow' => '0 0 12px rgba(0,0,0,0.15)',
                'padding' => '16px 20px',
                'min-width' => '300px',
                'text-align' => 'left',
                'border-left' => '5px solid #2196F3',
            ],
            'className' => 'toast-sweetalert-style toast-sweetalert-info',
        ],
        'warning' => [
            'duration' => 3000,
            'gravity' => 'top',
            'position' => 'right',
            'close' => true,
            'stopOnFocus' => true,
            'style' => [
                'background' => '#ffffff',
                'color' => '#545454',
                'font-size' => '16px',
                'font-weight' => '400',
                'border-radius' => '8px',
                'box-shadow' => '0 0 12px rgba(0,0,0,0.15)',
                'padding' => '16px 20px',
                'min-width' => '300px',
                'text-align' => 'left',
                'border-left' => '5px solid #ff9800',
            ],
            'className' => 'toast-sweetalert-style toast-sweetalert-warning',
        ],
    ],
    'defaults' => [
        // NOTA: Cambié el valor de 'gravity' a 'top' en los defaults para que 
        // funcione correctamente con el nuevo toastifier, ya que Toastify JS usa 'top' o 'bottom'
        'gravity' => 'top',
        'position' => 'right',
    ],
];
