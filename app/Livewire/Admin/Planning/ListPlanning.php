<?php

namespace App\Livewire\Admin\Planning;

use Livewire\Component;

class ListPlanning extends Component
{
    public function render()
    {
        return view('livewire.admin.planning.list-planning')
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
