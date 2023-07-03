@extends('layouts.users.auth-dashboard')
@section('auth-user-title',"BLW Dashboard Charts")
@section('auth-user-style')
<link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
@endsection

@section('auth-user-script')

@endsection

@section('auth-pagename','charts')
@section('auth-user-content')
<div id="main-content">
    <div id="main-content-inner">
    
    <div id="home-top" class="home-page-content">
        <div class="home-page-content-sub">
        <div class="home-title">CHARTS</div>
        <div class="home-title-img">
        <img src="./images/" alt="">
        </div>
        </div>
    
        <div class="home-page-content-sub two">
        <div class="home-title">QUOTES</div>
        <div class="home-title-extra">
        <div class="home-title-extra-sub">
    
            <div class="home-inner-extra-sub one">
            <div>
                <h2>EURUSD</h2>
                <span>Euro/US Dollar</span>
            </div>
            <h3>1.0346</h3>
            <div class="home-inner-percent">
                <h3>+0.00200</h3>
                <h3>+0.2%</h3>
            </div>
            </div>
    
            <div class="home-inner-extra-sub one">
                <div>
                <h2>EURUSD</h2>
                <span>Euro/US Dollar</span>
                </div>
                <h3>1.0346</h3>
                <div class="home-inner-percent">
                <h3>+0.00200</h3>
                <h3>+0.2%</h3>
                </div>
            </div>
    
        </div>
    
    
        <div class="home-title-extra-sub">
    
            <div class="home-inner-extra-sub two">
            <div>
                <h2>EURUSD</h2>
                <span>Euro/US Dollar</span>
            </div>
            <h3>1.0346</h3>
            <div class="home-inner-percent">
                <h3>+0.00200</h3>
                <h3>+0.2%</h3>
            </div>
            </div>
    
            <div class="home-inner-extra-sub two">
                <div>
                <h2>EURUSD</h2>
                <span>Euro/US Dollar</span>
                </div>
                <h3>1.0346</h3>
                <div class="home-inner-percent">
                <h3>+0.00200</h3>
                <h3>+0.2%</h3>
                </div>
            </div>
    
            <!-- <div>two</div> -->
        </div>
        <div class="home-title-extra-sub">
    
            <div class="home-inner-extra-sub three">
            <div>
                <h2>EURUSD</h2>
                <span>Euro/US Dollar</span>
            </div>
            <h3>1.0346</h3>
            <div class="home-inner-percent">
                <h3>+0.00200</h3>
                <h3>+0.2%</h3>
            </div>
            </div>
    
            <div class="home-inner-extra-sub three">
                <div>
                <h2>EURUSD</h2>
                <span>Euro/US Dollar</span>
                </div>
                <h3>1.0346</h3>
                <div class="home-inner-percent">
                <h3>+0.00200</h3>
                <h3>+0.2%</h3>
                </div>
            </div>
    
            <!-- <div>two</div> -->
        </div>
    
        
        </div>
        </div>
    </div>
    
    <div id="home-bottom" class="home-page-content two">
    <div class="home-page-content-sub two">
    <div class="home-title">Trusted Brokers</div>
    <div class="home-title-extra trusted-brokers-sub">
        <div class="broker-images">
            <img src="{{ asset('assets/images/BlackBull-Markets.png')}}" alt="">
        </div>
        <div class="broker-images">
            <img src="{{ asset('assets/images/ICM.png')}}" alt="">
        </div>
        <div class="broker-images">
            <img src="{{ asset('assets/images/XML.png')}}" alt="">
        </div>
    </div>
    </div>
    
    <div class="home-page-content-sub two">
    <div class="home-title">Trading History</div>
    <div class="home-title-extra trading-history">
    <div class="trading-history-sub one">
        <div class="trading-history-one">
        <div>EURUSD &nbsp; Euro/ US Dollar</div>
        <div>1.0344</div>
        </div>
        <div class="trading-history-two">
        <div class="open">open</div>
        <div class="grad-loading-img">
        <div class="gradient-linear">
        <div class="inner-gradient-linear"></div>
        </div>
        </div>
        </div>
    </div>
    
    <div class="trading-history-sub two">
        <div class="trading-history-one">
        <div>EURUSD &nbsp; Euro/ US Dollar</div>
        <div>1.0344</div>
        </div>
        <div class="trading-history-two">
        <div class="open">open</div>
        <div class="grad-loading-img">
        <div class="gradient-linear">
        <div class="inner-gradient-linear"></div>
        </div>
        </div>
        </div>
    </div>
    
    <div class="trading-history-sub three">
        <div class="trading-history-one">
        <div>EURUSD &nbsp; Euro/ US Dollar</div>
        <div>1.0344</div>
        </div>
        <div class="trading-history-two">
        <div class="open">open</div>
        <div class="grad-loading-img">
        <div class="gradient-linear">
        <div class="inner-gradient-linear"></div>
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
@endsection