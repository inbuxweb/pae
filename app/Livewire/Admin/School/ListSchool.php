<?php

namespace App\Livewire\Admin\School;

use Livewire\Component;

class ListSchool extends Component
{
    public function render()
    {

        $purchases = [
            [
                'nombre' => 'Colegio 1',
                'sede' => 'Bello',
                'capacidad' =>  rand(10, 1000),
                'cocinas' =>  rand(10, 1000),
                'estudiantes' =>  rand(10, 1000)
            ],
            [
                'nombre' => 'Colegio 2',
                'sede' => 'Sabaneta',
                'capacidad' =>  rand(10, 1000),
                'cocinas' =>  rand(10, 1000),
                'estudiantes' =>  rand(10, 1000)
            ],
            [
                'nombre' => 'Colegio 3',
                'sede' => 'Río Negro',
                'capacidad' =>  rand(10, 1000),
                'cocinas' =>  rand(10, 1000),
                'estudiantes' =>  rand(10, 1000)
            ],
            [
                'nombre' => 'Colegio 4',
                'sede' => 'Medellín',
                'capacidad' =>  rand(10, 1000),
                'cocinas' =>  rand(10, 1000),
                'estudiantes' =>  rand(10, 1000)
            ],
            // Agrega el resto de los ingredientes de manera similar
        
    ];

    return view('livewire.admin.school.list-school', [ 'purchases' => $purchases ])
    ->extends('livewire.layouts.app')
    ->section('content');
    }
}
