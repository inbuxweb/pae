<?php

namespace App\Livewire\Admin\Inventory;

use Livewire\Component;

class CreateProvider extends Component
{
    public function render()
    {
        return view('livewire.admin.inventory.create-provider')
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
