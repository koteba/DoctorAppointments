<?php

namespace App\Http\Livewire\Patient\History;

use Livewire\Component;

class FamilyHistory extends Component
{
    public $family=[];
    public function render()
    {
        return view('livewire.patient.history.family-history')->extends('layouts.master');
    }
}
