<?php

namespace App\Http\Livewire\Doctor;

use App\Models\User;
use App\Models\Review;
use App\Models\Allergy;
use Livewire\Component;
use App\Models\Recommend;
use App\Models\Prescription;

class Patient extends Component
{
    public $patients=[];
    public $prescriptions,$patient,$allergy,$recommend,$review,$type;

    public function mount(){
        $this->patients=User::where('role','Patient')->get();
    }
    public function render()
    {
       
        return view('livewire.doctor.patient')->extends('layouts.master');
    }
    public function store(){
        Prescription::create([
            'user_id'=>$this->patient,
            'description'=>$this->prescriptions
        ]);
        session()->flash('message','Prescription Added Successfully');
    }
    public function allergy(){
        Allergy::create([
            'user_id'=>$this->patient,
            'description'=>$this->allergy
        ]);
        session()->flash('message','Allergy Record Added Successfully');
    }
    public function recommend(){
        Recommend::create([
            'user_id'=>$this->patient,
            'description'=>$this->recommend
        ]);
        session()->flash('message','Recommendations Record Added Successfully');
    }

    public function review(){
        Review::create([
            'user_id'=>$this->patient,
            'comment'=>$this->review,
            'type'=>$this->type,
        ]);
        session()->flash('message','Review has been saved successfully');
    }





}
