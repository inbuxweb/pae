<?php

namespace App\Livewire\Admin\Report;

use Livewire\Component;

class Monitoreo extends Component
{
    public function render()
    {
        return view('livewire.admin.report.monitoreo')
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
