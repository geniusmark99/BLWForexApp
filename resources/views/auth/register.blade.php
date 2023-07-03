@extends('layouts.auth-layout')
@section('auth-title','BLW Register')
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
               <img src="{{ asset('assets/images/Google.png')}}" alt="">
                </div>
                <div class="google-signup-sub">
                    log in with google
                </div>
                <div></div>
            </a>
    
    
            
                <form method="POST" action="{{ route('register') }}" id="form-input">
                    @csrf
                <input type="text" id="firstname" placeholder="Firstname">
                 <input type="text" id="lastname" placeholder="Lastname">
                <input type="text" id="national-id" placeholder="National ID">
                <input type="email" id="email-address" placeholder="Email Address">  
               <label class="extra-label">
                <input type="password" id="password-address" placeholder="Password">
                <div class="btn-password" title="click to see password" id="show-password-btn">
                <svg>
                <use href="{{asset('assets/images/icons.svg#eye-svg-icon')}}"></use>
                </svg>
                </div>
                </label>
                 
                <div class="form-input-bottom">
                <div class="remember-me">
                <input type="checkbox">
                Remember me
                </div>     
                <a href="{{route('password.request')}}">
                Forget Password?
                </a>
                </div>
                
                <div class="form-btn-submit-cont">
                <button type="submit" class="form-btn-submit">
                Get Started
                </button>
                </div> 
                </form>
        
            </div>
        </div>
            </div>
    </div>
    
    </main>
@endsection