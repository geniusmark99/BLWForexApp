<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('auth-user-title')</title>
<link rel="stylesheet" href="{{ asset('assets/css/root.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/hamburger.css')}}">
<link rel="preload" href="{{asset('assets/images/auth-bg.jpg')}}" as="image">
@yield('auth-user-style')
</head>
<body dark-mode
x-data="{ page: `@yield('auth-pagename')`, 'loaded': true, show : false}"
>
<main id="fx-main">
<x-user.user-header/>
<div id="fx-content">
<x-user.user-sidebar/>
@yield('auth-user-content')

</div>
</main>
<script src="{{ asset('assets/scripts/alpine.js')}}"></script>
<script src="{{ asset('assets/scripts/funtions.js')}}"></script>
<script src="{{ asset('assets/scripts/index.js')}}"></script>
@yield('auth-user-script')
{{-- <script src="{{ asset('assets/scripts/lock.js')}}"></script> --}}
</body>
</html>