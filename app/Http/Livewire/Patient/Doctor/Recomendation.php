<?php

namespace App\Http\Livewire\Patient\Doctor;

use Livewire\Component;
use App\Models\Recommend;

class Recomendation extends Component
{
    public $recommendations=[];
    public function render()
    {
        $this->recommendations=Recommend::where('user_id',auth()->user()->id)->get();
        return view('livewire.patient.doctor.recomendation')->extends('layouts.master');
    }
}
