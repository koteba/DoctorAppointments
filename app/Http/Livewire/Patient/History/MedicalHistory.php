<?php

namespace App\Http\Livewire\Patient\History;

use Livewire\Component;
use App\Models\Prescription;

class MedicalHistory extends Component
{
    public $medical=[];
    public function render()
    {
        $this->medical=Prescription::where('user_id',auth()->user()->id)->get();
        
        return view('livewire.patient.history.medical-history')->extends('layouts.master');
    }
}
