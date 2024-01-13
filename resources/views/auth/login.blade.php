<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

@extends('base')
@section('title', "Luna Tales - Login")
@section('content')
    <div class="content">
        <form method="POST" action="{{route('login')}}" class="login-form">
            <h1>Connexion / Inscription</h1>
            @csrf

            <input type="email" name="email" class="login-username @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email')}}" required="true" autocomplete="email" autofocus/>
            <input type="password" name="password" class="login-password @error('password') is-invalid @enderror" placeholder="Password" required="true" autocomplete="current-password"/>
            <input type="submit" name="Login" value="Sign in" class="login-submit" />
            <p class="text">Not registred yet ? <a class="text-link" href="{{route('register')}}">Create an account</a></p>

            @error('email')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            @error('password')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror

        </form>
        <a href="{{ route('password.request') }}" class="login-forgot-pass">forgot password?</a>
        <div class="underlay-photo"></div>
        <div class="underlay-black"></div>

    </div>

@endsection
