<?php

namespace App\Livewire\Admin\Report;

use Livewire\Component;

class Cumplimiento extends Component
{
    public function render()
    {
        return view('livewire.admin.report.cumplimiento')
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
