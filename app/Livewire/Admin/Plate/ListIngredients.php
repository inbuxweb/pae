<?php

namespace App\Livewire\Admin\Plate;

use Livewire\Component;

class ListIngredients extends Component
{
    public function render()
    {

        $ingredients = [
            [
                'nombre' => 'Arroz',
                'categoria' => 'Carbohidratos',
                'proveedor' => 'Proveedor A',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Pasta',
                'categoria' => 'Carbohidratos',
                'proveedor' => 'Proveedor B',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Papa',
                'categoria' => 'Carbohidratos',
                'proveedor' => 'Proveedor C',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Pollo',
                'categoria' => 'Proteínas',
                'proveedor' => 'Proveedor D',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Carne de res',
                'categoria' => 'Proteínas',
                'proveedor' => 'Proveedor E',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Salmón',
                'categoria' => 'Proteínas',
                'proveedor' => 'Proveedor F',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Lechuga',
                'categoria' => 'Verduras',
                'proveedor' => 'Proveedor G',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Tomate',
                'categoria' => 'Verduras',
                'proveedor' => 'Proveedor H',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Cebolla',
                'categoria' => 'Verduras',
                'proveedor' => 'Proveedor I',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Aceite de oliva',
                'categoria' => 'Grasas saludables',
                'proveedor' => 'Proveedor J',
                'unidad_medida' => 'mililitros',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Aguacate',
                'categoria' => 'Grasas saludables',
                'proveedor' => 'Proveedor K',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Coco',
                'categoria' => 'Grasas saludables',
                'proveedor' => 'Proveedor L',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Huevo',
                'categoria' => 'Proteínas',
                'proveedor' => 'Proveedor M',
                'unidad_medida' => 'unidades',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Tofu',
                'categoria' => 'Proteínas',
                'proveedor' => 'Proveedor N',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Lentejas',
                'categoria' => 'Proteínas',
                'proveedor' => 'Proveedor O',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Quinoa',
                'categoria' => 'Granos y cereales',
                'proveedor' => 'Proveedor P',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Cuscús',
                'categoria' => 'Granos y cereales',
                'proveedor' => 'Proveedor Q',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Avena',
                'categoria' => 'Granos y cereales',
                'proveedor' => 'Proveedor R',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Garbanzos',
                'categoria' => 'Legumbres',
                'proveedor' => 'Proveedor S',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Almendras',
                'categoria' => 'Frutos secos y semillas',
                'proveedor' => 'Proveedor T',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Nueces',
                'categoria' => 'Frutos secos y semillas',
                'proveedor' => 'Proveedor U',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Espárragos',
                'categoria' => 'Verduras',
                'proveedor' => 'Proveedor V',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Brócoli',
                'categoria' => 'Verduras',
                'proveedor' => 'Proveedor W',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Calabacín',
                'categoria' => 'Verduras',
                'proveedor' => 'Proveedor X',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
            [
                'nombre' => 'Pepino',
                'categoria' => 'Verduras',
                'proveedor' => 'Proveedor X',
                'unidad_medida' => 'gramos',
                'fecha_creacion' => '2024-01-23',
            ],
        ];

        
        return view('livewire.admin.plate.list-ingredients', [ 'ingredients' => $ingredients ])
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
