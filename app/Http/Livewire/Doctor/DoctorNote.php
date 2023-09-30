<?php

namespace App\Http\Livewire\Doctor;

use App\Models\Note;
use Livewire\Component;

class DoctorNote extends Component
{
    public $notes=[],$my_notes;
    public function render()
    {
        $this->notes=Note::where('user_id',auth()->user()->id)->get();
        return view('livewire.doctor.doctor-note')->extends('layouts.master');
    }
    protected $rules = [
        'my_notes' => 'required',
        
    ];

    public function store(){
         $this->validate();
         Note::create([
            'description'=>$this->my_notes,
            'user_id'=>auth()->user()->id,
         ]);
         

         session()->flash('message','Notes added Successfully');
    }
}
