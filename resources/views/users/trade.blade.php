@extends('layouts.users.auth-dashboard')
@section('auth-user-title',"BLW Dashboard Trade")
@section('auth-pagename','trade')
@section('auth-user-style')
<link rel="stylesheet" href="{{asset('assets/css/trades.css')}}">
@endsection
@section('auth-user-script')
<script src="{{asset('assets/scripts/trades.js')}}"></script>
@endsection

@section('auth-user-content')
<div id="main-content">
    <div id="main-content-inner">
    <div id="trades-content">
    <div class="trades-content-top">
        <button id="open-trade-menu"  class="btn">
            <svg>
                <use href="{{ asset('assets/images/icons.svg#list-svg-icon')}}"></use>
            </svg>
        </button>
        <ul class="trades-ul">
            <li class="pink-grad"> 
                <div class="trade-li-1">EUR/USD</div>
                <div class="trade-li-2">1.074845</div>
            </li>
            
            <li class="blue-grad"> 
                <div  class="trade-li-1">EUR/USD</div>
                <div class="trade-li-2">1.074845</div>
            </li>
            
            <li class="lemon-grad"> 
                <div  class="trade-li-1">EUR/USD</div>
                <div class="trade-li-2">1.074845</div>
            </li>
            
            <li class="pink-grad"> 
                <div  class="trade-li-1">EUR/USD</div>
                <div class="trade-li-2">1.074845</div>
            </li>
            
            <li class="blue-grad"> 
                <div  class="trade-li-1">EUR/USD</div>
                <div class="trade-li-2">1.074845</div>
            </li>
            
            <li class="lemon-grad"> 
                <div  class="trade-li-1">EUR/USD</div>
                <div class="trade-li-2">1.074845</div>
            </li>
        </ul>
    </div>
    <div class="trades-content-bottom">
    <div class="trades-content-bottom-sub top">
        <div class="trade-title">TRADES</div>
      <div class="trade-main-content">
        <div class="trade-main-content-sub top">
            <h2>Lot Size</h2>
            <ul>
                <li>-0.1</li>
                <li>-0.01</li>
                <li>1.00</li>
                <li>+1.00</li>
            </ul> 
    
            <div class="trade-stop-loss">
                <div class="input-stop-loss">
                    <input type="text" type="number">
                    <span style="--col: red">Stop loss</span>
                </div>
                <div class="input-stop-loss">
                    <input type="text" type="number">
                    <span style="--col:var(--grad-blue-2)">Take Profit</span>
                </div>
            </div>
        </div>
        <div class="trade-main-content-sub bottom">
            <div class="bottom-inner">
            <button class="bottom-btn one">SELL</button>
            <button class="bottom-btn two">BUY</button>
        </div>
        </div>
    </div>
    
    </div>
    <div class="trades-content-bottom-sub bottom">
    <img src="{{ asset('assets/images/Chart-example.png')}}">
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection