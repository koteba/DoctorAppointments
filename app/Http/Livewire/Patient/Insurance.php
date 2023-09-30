<?php

namespace App\Http\Livewire\Patient;

use Livewire\Component;
use App\Models\InsuranceModel;
use Illuminate\Support\Carbon;

class Insurance extends Component
{
    public $insurance,$period,$payment_method,$deposits;
    public $insurances=[];
    public $exists;
    public function render()
    {
        $this->insurances=InsuranceModel::where('user_id',auth()->user()->id)->get();
        return view('livewire.patient.insurance')->extends('layouts.master');
    }

    protected $rules = [
        'insurance' => 'required',
        'period' => 'required',
        'payment_method' => 'required',
        'deposits' => 'required',
    ];

    public function store(){
        $this->validate();

        InsuranceModel::create([
            'user_id'=>auth()->user()->id,
            'date_applied'=>Carbon::now(),
            'status'=>'Pending',
            'payment_method'=>$this->payment_method,
            'deposit_amount'=>$this->deposits,
            'period'=>$this->period,
            'insurance_cover'=>$this->insurance
        ]);

        session()->flash('message','Insurance Saved Successfully.');
    }

}
