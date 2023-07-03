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
@yield('auth-content')
</body>
<script src="{{asset('assets/scripts/funtions.js')}}"></script>
<script src="{{asset('assets/scripts/login.js')}}"></script>
{{-- <script src="{{asset('assets/scripts/lock.js')}}"></script> --}}
</html>