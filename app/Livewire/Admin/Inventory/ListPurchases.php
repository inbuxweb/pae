<?php

namespace App\Livewire\Admin\Inventory;

use Livewire\Component;

class ListPurchases extends Component
{
    public function render()
    {
        $purchases = [
                [
                    'nombre' => 'Arroz',
                    'categoria' => 'Carbohidratos',
                    'proveedor' => 'Proveedor A',
                    'unidad_medida' => 'gramos',
                    'fecha_creacion' => '2024-01-23',
                    'stock_actual' => rand(10, 1000),
                    'comedor' => 'Comedor A',
                    'colegio' => 'Colegio 1'
                ],
                [
                    'nombre' => 'Pasta',
                    'categoria' => 'Carbohidratos',
                    'proveedor' => 'Proveedor B',
                    'unidad_medida' => 'gramos',
                    'fecha_creacion' => '2024-01-23',
                    'stock_actual' => rand(10, 1000),
                    'comedor' => 'Comedor B',
                    'colegio' => 'Colegio 2'
                ],
                [
                    'nombre' => 'Papa',
                    'categoria' => 'Carbohidratos',
                    'proveedor' => 'Proveedor C',
                    'unidad_medida' => 'gramos',
                    'fecha_creacion' => '2024-01-23',
                    'stock_actual' => rand(10, 1000),
                    'comedor' => 'Comedor C',
                    'colegio' => 'Colegio 3'
                ],
                [
                    'nombre' => 'Pollo',
                    'categoria' => 'Proteínas',
                    'proveedor' => 'Proveedor D',
                    'unidad_medida' => 'gramos',
                    'fecha_creacion' => '2024-01-23',
                    'stock_actual' => rand(10, 1000),
                    'comedor' => 'Comedor D',
                    'colegio' => 'Colegio 4'
                ],
                [
                    'nombre' => 'Carne de res',
                    'categoria' => 'Proteínas',
                    'proveedor' => 'Proveedor E',
                    'unidad_medida' => 'gramos',
                    'fecha_creacion' => '2024-01-23',
                    'stock_actual' => rand(10, 1000),
                    'comedor' => 'Comedor E',
                    'colegio' => 'Colegio 5'
                ],
                // Agrega el resto de los ingredientes de manera similar
            
        ];

        return view('livewire.admin.inventory.list-inventory', [ 'purchases' => $purchases ])
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
