<?php

namespace App\Livewire\Admin\School;

use Livewire\Component;

class CreateSchool extends Component
{
    public function render()
    {
        return view('livewire.admin.school.create-school')
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
