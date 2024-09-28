<?php

return [
    'name' => env('APP_NAME', 'Nombre_proyecto'),
    'env' => env('APP_ENV', 'base_de_datos'),
    'debug' => filter_var(env('APP_DEBUG', false), FILTER_VALIDATE_BOOLEAN),
    'dev' => env('APP_DEV', false),
    'url' => env('APP_URL', 'http://localhost'),
    'currency' => env('APP_CURRENCY', 'PEN'),
    'language' => env('APP_LANGUAGE', 'es'),
    'company' => env('AUTHOR_COMPANY', 'Company'),
];