<?php

namespace App\Livewire\Admin\Inventory;

use Livewire\Component;

class ListProvider extends Component
{
    public function render()
    {
        $providers = array(
            array(
                "nombre" => "Proveedor A",
                "NIT" => "123456789-0",
                "telefono" => "123456789",
                "ciudad" => "Bogotá"
            ),
            array(
                "nombre" => "Proveedor B",
                "NIT" => "987654321-0",
                "telefono" => "987654321",
                "ciudad" => "Medellín"
            ),
            array(
                "nombre" => "Proveedor C",
                "NIT" => "456789123-0",
                "telefono" => "456789123",
                "ciudad" => "Bello"
            ),
        );
        
        return view('livewire.admin.inventory.list-provider', [ 'providers' => $providers ])
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
