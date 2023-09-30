@extends('layouts.app')
@section('content')
    <h5>Create account</h5>

    <!-- form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input id="name" class="form-control" type="text" placeholder="Full Name" name="name" :value="old('name')" required autofocus />
        </div>
        <div class="form-group">
            <input id="email" class="form-control" placeholder="Email Address" type="email" name="email" :value="old('email')" required />
        </div>
        <div class="form-group">
            <select name="role" required id="" class="form-control">
                <option value="">--Select Role--</option>
                <option value="Patient">Patient</option>
                <option value="Doctor">Doctor</option>
            </select>
        </div>
        <div class="form-group">
            <input id="password" placeholder="Password" class="form-control" type="password" name="password" required autocomplete="new-password" />
        </div>
        <div class="form-group">

            <input id="password_confirmation" placeholder="Confirm Password" class="form-control" type="password"  name="password_confirmation" required />
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
        <hr>
        <p class="text-muted">Already have an account?</p>
        <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Sign in!</a>
    </form>
@endsection




{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
