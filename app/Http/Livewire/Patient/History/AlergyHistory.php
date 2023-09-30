<?php

namespace App\Http\Livewire\Patient\History;

use App\Models\Allergy;
use Livewire\Component;

class AlergyHistory extends Component
{
    public $allergy=[]; 
    public function render()
    {
        $this->allergy=Allergy::where('user_id',auth()->user()->id)->get();
       
        return view('livewire.patient.history.alergy-history')->extends('layouts.master');
    }
}
