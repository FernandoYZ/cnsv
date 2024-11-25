<?php

namespace Database\Seeders;

use App\Models\Config;
use App\Models\Footer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Footer::factory(1)->create();

        Footer::factory()->create([
            'address' => 'Carretera a Lunahuana km. 8, Apdo. 69, Nuevo Imperial, Peru',
            'cell_phone' => '+51 940 768 184',
            'email_primary' => 'cnsv.rectorado@gmail.com',
        ]);
        Config::factory()->create([
            'name'=>'CNSV - Colegio Nuestra Señora del Valle',
            'keyword'=>'educación primaria, educación secundaria, seminario menor, educación religiosa, valores, formación integral, colegio con residencia, colegio internado',
            'property_url'=>'https://cnsv.edu.pe',
            'property_type'=>'website',
            'property_title'=>'Colegio Nuestra Señora del Valle Seminario Menor',
            'property_description'=>'Brindamos formación académica y valores en un ambiente integral y humano, promoviendo el desarrollo integral de nuestros estudiantes.',
            'meta_description'=>'En el Colegio Nuestra Señora del Valle, brindamos educación integral y formación en valores en modalidad de residencia.',
            'meta_author'=>'Yovera Zavala Fernando Cesar',
        ]);
    }
}
