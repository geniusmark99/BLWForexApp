@extends('layouts.auth-layout')
@section('auth-title','BLW Login')
@section('auth-content')
<main class="form-content">
<div class="form-top-content">
<img src="{{ asset('assets/images/logo-transparent.png')}}" alt="">
</div>
<div class="form-bottom-content">
<div class="innner-form-bottom-content">
<div class="form-main-container">
<a class="back-arrow" href="{{route('home')}}">
<img src="{{asset('assets/images/back.png')}}" alt="" srcset="">
</a>
<div class="form-main-inner-container">
<a href="#" class="google-signup-link">
    <div class="google-signup-sub">
   <img src="{{asset('assets/images/Google.png')}}" alt="">
    </div>
    <div class="google-signup-sub">
        log in with google
    </div>
    <div></div>
</a>

<form id="form-input" method="post" action="{{route('login')}}">
    @csrf

<input type="text" id="email-address" name="email" placeholder="Email Address">
{{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}

<label class="extra-label">
    <input type="password" id="password-address" name="password" placeholder="Password">
    <div class="btn-password" title="click to see password" id="show-password-btn">
        <svg>
            <use href="{{asset('assets/images/icons.svg#eye-svg-icon')}}"></use>
        </svg>
    </div>
</label>
{{-- <x-input-error :messages="$errors->get('password')" class="mt-2" />     --}}


<div class="form-input-bottom">
    <div class="remember-me">
        {{-- <a href="{{route('register')}}">
            Register
         </a> --}}
        <input type="checkbox" name="remember">
        Remember me
    </div>     
    <a href="{{route('password.request')}}">
       Forget Password?
    </a>
</div>

<div class="form-btn-submit-cont">
<button type="submit" class="form-btn-submit">
Log in
</button>
</div>
</form>
</div>
</div>
</div>
</div>
</main>
@endsection
