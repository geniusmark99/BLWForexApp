@extends('layouts.users.auth-dashboard')
@section('auth-user-title',"BLW Dashboard News")
@section('auth-pagename','news')
@section('auth-user-style')
<link rel="stylesheet" href="{{asset('assets/css/news.css')}}">
@endsection

@section('auth-user-script')
<script src="{{asset('assets/scripts/news.js')}}"></script>
@endsection

@section('auth-user-content')
<div id="main-content">
    <div id="main-content-inner">
    
    <!-- NEWS CONTENT ONE -->
    <div class="news-content">
    <div class="news-content-header">
    <h2>News</h2>
    <div class="open-desc"><code>esc</code>&nbsp;to close</div>
    </div>
    <div class="news-content-content">
    <ul id="new-ul-lists"></ul>
    </div>
    <div class="news-content-footer">
    <div class="news-expand-more" id="expand-news-footer-content">
    <svg id="expand-icon">
    <use href="{{asset('assets/images/icons.svg#arrow-down-svg-icon')}}"></use>
    </svg>
    </div>
    </div>
    </div>
    <!-- END OF NEWS CONTENT ONE -->
    
    
    <!-- NEWS CONTENT TWO -->
    <div class="news-content">
        <div class="news-content-header">
        <h2>News</h2>
        </div>
        <div class="news-extra-content">
            <div class="news-extra-content-sub">
                <div>
                    Rule 1/10/2023 <br>
                    Candles: Will be announce on each <br>
                    recommendation. <br>
                    Expiration Time: 30s/1 Min
                </div>
                <div>
                    Markets: AUD/CAD<br>
                    EUR/CAD USD/CHF<br>
                    EUR/GBP CAD/JPY<br>
                    GBP/USD<br>
                    AUD/JPY Setuo: RSI 2, STOCH 4,2,2<br>
                    CAD/CHF
                </div>
            </div>
            <div class="news-extra-content-sub">
                <div>
                    Weak candles ahead today team, you know that <br>
                    our main target is to see the stoch times <br>
                    separate meaning tha signal change.<br>
    
    
                    I want you to please here in consideration that <br>
                    starting on Wednesday we are going to have<br>
                    USD volatility.<br>
                    and you know how much USD market affects <br>
                    th rest so plan your week, either way i will do <br>
                    my best to post the recommendation in order <br>
                    to avoid my looses ok.
            
                </div>
                <div>
                    For news members welcome to the team <br>
                    please dont get overwhelm about<br>
                    the way we trade here, start with my webinars <br>
                    and you will understand<br>
                    the dynamic here. 
                </div>
            </div>
        <!-- <ul id="new-ul-lists-2"></ul> -->
        </div>
        <div class="news-content-footer">
        <div class="news-expand-more" id="expand-news-footer-content">
      
        </div>
        </div>
        </div>
    <!-- END OF NEWS CONTENT TWO -->
    
    
    
    
    <!-- <div class="news-content"></div> -->
    </div>
    </div>
@endsection