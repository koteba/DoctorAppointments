<?php

namespace App\Http\Livewire\Patient\Doctor;

use App\Models\Review;
use Livewire\Component;

class PhysicalExam extends Component
{
    public $exam=[];
    public function render()
    {
        $this->exam=Review::where('user_id',auth()->user()->id)->where('type','physical Exam')->get();
        return view('livewire.patient.doctor.physical-exam')->extends('layouts.master');
    }
}
