<?php

namespace App\Http\Livewire\Patient;

use App\Models\Note;
use Livewire\Component;

class Notes extends Component
{

    public $notes,$my_notes;
    public function render()
    {
        $this->notes=Note::where('user_id',auth()->user()->id)->get();
        return view('livewire.patient.notes')->extends('layouts.master');
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
