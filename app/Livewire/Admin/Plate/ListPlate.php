<?php

namespace App\Livewire\Admin\Plate;

use Livewire\Component;

class ListPlate extends Component
{
    public function render()
    {
        $plates = [
            [
                'nombre' => 'Desayuno Energético',
                'tipo' => 'Desayuno',
                'ingredientes' => ['avena', 'plátano', 'nueces', 'yogur', 'miel'],
                'informacion_nutricional' => 'Carbohidratos: 40g, Proteínas: 15g, Grasas: 10g',
                'descripcion' => 'Un desayuno nutritivo y energético con avena, plátano, nueces, yogur y miel.',
                'imagen' => asset('assets/images/avena.jpg')
            ],
            [
                'nombre' => 'Almuerzo Saludable',
                'tipo' => 'Almuerzo',
                'ingredientes' => ['pollo', 'arroz integral', 'brócoli', 'zanahoria', 'pimiento'],
                'informacion_nutricional' => 'Carbohidratos: 50g, Proteínas: 30g, Grasas: 8g',
                'descripcion' => 'Un almuerzo balanceado con pollo a la plancha, arroz integral, brócoli al vapor, zanahoria rallada y pimiento.',
                'imagen' => asset('assets/images/almuerzo.jpeg')
            ],
            [
                'nombre' => 'Postre de Frutas',
                'tipo' => 'Postre',
                'ingredientes' => ['piña', 'fresas', 'uvas', 'kiwi', 'yogur natural', 'granola'],
                'informacion_nutricional' => 'Carbohidratos: 25g, Proteínas: 5g, Grasas: 3g',
                'descripcion' => 'Un postre refrescante y saludable con piña, fresas, uvas, kiwi, yogur natural y granola.',
                'imagen' => asset('assets/images/postre.jpg')
            ],
        ];
        

        return view('livewire.admin.plate.list-plate', [ 'plates' => $plates ])
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
