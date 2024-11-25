<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hitos = [
            [
                'icono' => 'lapiz.svg',
                'titulo' => 'Aprobación del funcionamiento del Colegio "Nuestra Señora del Valle"',
                'descripcion' => 'La Resolución Directoral Nº 18073 autoriza el funcionamiento del Colegio Particular "Nuestra Señora del Valle", que también será el inicio del Seminario Menor.',
                'imagen' => 'https://via.placeholder.com/100x50/404040/ffffff?text=Texto'
            ],
            [
                'icono' => 'libro.svg',
                'titulo' => 'Estructuración y comienzo de las clases del Colegio',
                'descripcion' => 'Comienza oficialmente el primer ciclo escolar del Colegio "Nuestra Señora del Valle" con 40 alumnos en 3º y 4º de Primaria, bajo el liderazgo del P. Agapito Muñoz.',
                'imagen' => 'https://via.placeholder.com/100x50/404040/ffffff?text=Texto'
            ],
            [
                'icono' => 'cohete.svg',
                'titulo' => 'Erigimiento canónico del Seminario Menor',
                'descripcion' => 'Mons. Ignacio María de Orbegozo erige canónicamente el Seminario Menor "Nuestra Señora del Valle" con sede en Nuevo Imperial.',
                'imagen' => 'https://via.placeholder.com/100x50/404040/ffffff?text=Texto'
            ],
            [
                'icono' => 'idea.svg',
                'titulo' => 'Colocación de la imagen de la Madre del Amor Hermoso en la Ermita',
                'descripcion' => 'San Josemaría Escrivá regala la imagen de la Madre del Amor Hermoso a la Prelatura, que se coloca en la Ermita del Seminario Menor.',
                'imagen' => 'https://via.placeholder.com/100x50/404040/ffffff?text=Texto'
            ],
            [
                'icono' => 'estrella.svg',
                'titulo' => 'Autorización del Primer Ciclo de Secundaria',
                'descripcion' => 'Se autoriza el funcionamiento del Primer Ciclo de Educación Secundaria Común para varones en el Colegio "Nuestra Señora del Valle".',
                'imagen' => 'https://via.placeholder.com/100x50/404040/ffffff?text=Texto'
            ],
            [
                'icono' => 'trofeo.svg',
                'titulo' => 'Autorización del Segundo Ciclo de Secundaria',
                'descripcion' => 'Se autoriza el funcionamiento del Segundo Ciclo de Educación Secundaria Común en el Colegio, ampliando la Resolución anterior.',
                'imagen' => 'https://via.placeholder.com/100x50/404040/ffffff?text=Texto'
            ],
        ];
        return view('pages.about', compact('hitos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
