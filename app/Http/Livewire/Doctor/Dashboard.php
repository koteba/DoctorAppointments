<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.doctor.dashboard')->extends('layouts.master');
    }
}
