<?php

namespace App\Http\Livewire\Patient;

use Livewire\Component;
use App\Models\PatientAppointment;

class Appointment extends Component
{
    public  $appointments=[];

    public $doctor,$diagnosis,$date;
    public function render()
    {
        $this->appointments=PatientAppointment::where('user_id',auth()->user()->id)->get();
        return view('livewire.patient.appointment')->extends('layouts.master');
    }

    protected $rules = [
        'date' => 'required',
        'doctor' => 'required',
        'diagnosis' => 'required',
        
    ]; 
    public function store(){
        $this->validate();

    
         PatientAppointment::create(
             [
                 'diagnosis'=>$this->diagnosis,
                 'doctor'=>$this->doctor,
                 'date'=>$this->date,
                 'status'=>'pending',
                 'user_id'=>auth()->user()->id
             ]

         );

         session()->flash('message','Appointment has been posted');
    }
}
