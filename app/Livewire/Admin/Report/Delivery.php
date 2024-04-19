<?php

namespace App\Livewire\Admin\Report;

use Livewire\Component;

class Delivery extends Component
{
    public function render()
    {
        return view('livewire.admin.report.delivery')
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
