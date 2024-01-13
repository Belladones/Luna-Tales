<link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
@extends('base')
@section('title', "Luna Tales - Register")
@section('content')
<div class="content">

    <form method="POST" class="register-form" id="form-register" action="{{ route('register') }}">
        <h1>Créer un compte</h1>
        @csrf

        <div class="raw">

            <div>
                <x-text-input class="register-username" id="name" type="text" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input id="email" class="register-username"  class="register-username" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

        </div>

        <div class="raw">
            <!-- Password -->

            <x-text-input id="password" class="register-password"
                          type="password"
                          name="password"
                          placeholder="Password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Confirm Password -->

            <x-text-input id="password_confirmation" class="register-password"
                          type="password"
                          name="password_confirmation"
                          placeholder="Password Confirm"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        </div>
        <x-primary-button class="register-submit">
            {{ __('Sign up') }}
        </x-primary-button>

        <p class="text">Already have account ? <a class="text-link" href="{{route('login')}}">Login</a></p>



    </form>
    <div class="underlay-photo"></div>
    <div class="underlay-black"></div>
</div>
@endsection
