<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;

class DoctorAppointment extends Component
{
    public $appointments=[];
    public function render()
    {
        return view('livewire.doctor.doctor-appointment')->extends('layouts.master');
    }
}
