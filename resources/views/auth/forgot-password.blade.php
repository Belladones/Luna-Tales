<link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
@extends('base')
@section('title', "Luna Tales - Register")
@section('content')

    <div class="content">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" class="register-form" action="{{ route('password.email') }}">


            <p class="text2">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>


            @csrf

            <!-- Email Address -->
                <x-text-input id="email" class="register-username" type="email" name="email" :value="old('email')" placeholder="Email"  required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <x-primary-button class="register-submit">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </form>
        <div class="underlay-photo"></div>
        <div class="underlay-black"></div>
    </div>
@endsection
