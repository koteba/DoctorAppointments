<?php

namespace App\Http\Livewire\Patient\Doctor;

use App\Models\Review;
use Livewire\Component;

class VitalSigns extends Component
{
    public $vitals=[];
    public function render()
    {
        $this->vitals=Review::where('user_id',auth()->user()->id)->where('type','Vital Signs')->get();
        return view('livewire.patient.doctor.vital-signs')->extends('layouts.master');
    }
}
