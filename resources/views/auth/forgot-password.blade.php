<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('auth-title')</title>
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
    <main class="form-content">
        <div class="form-top-content">
        <img src="{{ asset('assets/images/logo-transparent.png')}}" alt="">
        </div>
        <div class="form-bottom-content">
        <div class="innner-form-bottom-content">
        <div class="form-main-container" style="background-color:#000E2D">
        <a class="back-arrow" href="{{route('home')}}">
        </a>
        <div class="form-main-inner-container">
            <div id="forgot-password-desc">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
        <form id="form-input" method="post" action="{{route('password.email')}}">
            @csrf
        
        <input type="text" id="email-address" name="email" placeholder="Email Address">
        <div class="form-btn-submit-cont">
        <button type="submit" class="form-btn-submit">
        {{ __('Email Password Reset Link') }}
        </button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </main> 
</body>
<script src="{{asset('assets/scripts/funtions.js')}}"></script>
{{-- <script src="{{asset('assets/scripts/lock.js')}}"></script> --}}
</html>