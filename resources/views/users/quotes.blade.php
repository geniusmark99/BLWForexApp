@extends('layouts.users.auth-dashboard')
@section('auth-user-title',"BLW Dashboard Quotes")
@section('auth-pagename','quotes')
@section('auth-user-style')
<link rel="stylesheet" href="{{ asset('assets/css/quotes.css')}}">
@endsection
@section('auth-user-script')
<link rel="stylesheet" href="{{ asset('assets/scripts/quotes.js')}}">
@endsection
@section('auth-user-content')
<div id="main-content">
    <div id="main-content-inner">
    
        <div id="quotes-main">
        <div class="quotes-title">QUOTES</div>
      <div class="quotes-main-extra">
        <div class="quotes-main-extra-sub" id="quotes-data"></div>
        <div class="quotes-main-extra-sub" id="quotes-data-2"></div>
      </div>
    </div>
    
    </div>
    </div>
@endsection