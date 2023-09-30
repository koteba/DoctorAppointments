<?php

namespace App\Http\Livewire\Patient;

use App\Models\Allergy;
use Livewire\Component;
use App\Models\Recommend;
use App\Models\Prescription;
use App\Models\PatientAppointment;

class Home extends Component
{
    public $appointments,$allergies,$recommends,$prescriptions;

    public function mount(){
        if(auth()->user()->role=='Doctor'){
            return redirect()->route('doctor.home');
        }
    }
    public function render()
    {
        $this->appointments=PatientAppointment::where('user_id',auth()->user()->id)->count();
        $this->allergies=Allergy::where('user_id',auth()->user()->id)->count();
        $this->recommends=Recommend::where('user_id',auth()->user()->id)->count();
        $this->prescriptions=Prescription::where('user_id',auth()->user()->id)->count();
        return view('livewire.patient.home')->extends('layouts.master');
    }
}
