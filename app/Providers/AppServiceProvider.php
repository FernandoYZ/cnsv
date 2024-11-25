<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Footer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $config = (object) [
            'name' => 'CNSV - Colegio Nuestra Señora del Valle',
            'keyword' => 'educación primaria, educación secundaria, seminario menor, educación religiosa, valores, formación integral, colegio con residencia, colegio internado',
            'property_url' => 'https://cnsv.edu.pe',
            'property_type' => 'website',
            'property_title' => 'Colegio Nuestra Señora del Valle Seminario Menor',
            'property_description' => 'Brindamos formación académica y valores en un ambiente integral y humano, promoviendo el desarrollo integral de nuestros estudiantes.',
            'meta_description' => 'En el Colegio Nuestra Señora del Valle, brindamos educación integral y formación en valores en modalidad de residencia.',
            'meta_author' => 'Yovera Zavala Fernando Cesar'
        ];

        $footer = (object) [
            'address' => 'Carretera a Lunahuana km. 8, Apdo. 69, Nuevo Imperial, Peru',
            'cell_phone' => '+51 940 768 184',
            'email_primary' => 'cnsv.rectorado@gmail.com',
        ];


        View::share([
            'name' => $config->name,
            'keyword' => $config->keyword,
            'property_url' => $config->property_url,
            'property_type' => $config->property_type,
            'property_title' => $config->property_title,
            'property_description' => $config->property_description,
            'meta_description' => $config->meta_description,
            'meta_author' => $config->meta_author,
            'address' => $footer->address,
            'cell_phone' => $footer->cell_phone,
            'email_primary' => $footer->email_primary,
        ]);
    }
}
