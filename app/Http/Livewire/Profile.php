<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $name,$dob,$gender,$country,$city,$post_code,$address,$phone;
    public function mount(){
        $this->name=auth()->user()->name;
        $this->dob=auth()->user()->dob;
        $this->gender=auth()->user()->gender;
        $this->country=auth()->user()->country;
        $this->city=auth()->user()->city;
        $this->post_code=auth()->user()->post_code;
        $this->address=auth()->user()->address;
        $this->phone=auth()->user()->phone;
    }
    public function render()
    {
        return view('livewire.profile')->extends('layouts.master');
    }

    public function userData(){
       $user=auth()->user();
       $user->name=$this->name;
       $user->Save();
    }

    public function contact(){
        $user=auth()->user();
        $user->dob=$this->dob;
        $user->gender=$this->gender;
        $user->country=$this->country;
        $user->city=$this->city;
        $user->address=$this->address;
        $user->phone=$this->phone;
        $user->post_code=$this->post_code;
        $user->Save();
    }
}
