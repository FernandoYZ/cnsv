<?php

return [
    'mission' => env('DATA_MISSION','Misión de la empresa'),
    'vision' => env('DATA_VISION', 'Visión de la empresa'),
    'description' => env('DATA_DESCRIPTION', 'Description'),
    'address' => env('DATA_ADDRESS', 'Calle, Provincia, Departamento'),
    'property_url' => env('DATA_PROPERTY_URL', 'https://google.com'),
    'property_type' => env('DATA_PROPERTY_TYPE', 'Meta Title'),
    'property_title' => env('DATA_PROPERTY_TITLE', 'Meta Title'),
    'property_description' => env('DATA_PROPERTY_DESCRIPTION', 'Meta Description'),
    'location' => env('DATA_LOCATION', 'Lima, Perú'),
    'keywords' => env('DATA_KEYWORDS', 'keywords'),
    'facebook' => env('DATA_FACEBOOK_URL', 'https://facebook.com'),
    'email' => env('DATA_CONTACT_EMAIL', 'email@email.com'),
    'phone' => env('DATA_PHONE_NUMBER', '+51999999999'),
    'authors' => [
        [
            'fullname' => env('AUTHOR_1_FULLNAME', 'Nombre Autor 1'),
            'name' => env('AUTHOR_1_NAME', 'NombreAlternativo1'),
            'email' => env('AUTHOR_1_EMAIL', 'email1@example.com'),
        ],
        [
            'fullname' => env('AUTHOR_2_FULLNAME', 'Nombre Autor 2'),
            'name' => env('AUTHOR_2_NAME', 'NombreAlternativo2'),
            'email' => env('AUTHOR_2_EMAIL', 'email2@example.com'),
        ],
        [
            'fullname' => env('AUTHOR_3_FULLNAME', 'Nombre Autor 3'),
            'email' => env('AUTHOR_3_EMAIL', 'email3@example.com'),
        ],
    ],
];