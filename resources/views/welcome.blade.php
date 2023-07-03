<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BLW Dashboard Page</title>
<link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
</head>
<body>
<main id="forex-app">
<!-- Hero one -->
<div class="hero hero-one">
<video autoplay loop muted plays-inline class="back-video" 
src="{{asset('assets/videos/Video1.mp4')}}" type="video/mp4">
</video>
<nav id="top-forex-app-nav">
<img src="{{asset('assets/images/logo-transparent.png')}}" alt="The Logo of the Company" class="logo" draggable="false">
<ul>
<li>
    <a href="{{route('login')}}" id="login">Log in</a>
    <a href="#">Contact us</a>
</li>
</ul>
</nav>

<div class="content">
<div class="content-sub content-one">
<h2>Trade with the #1 Forex Company
Grow your account around 20%
The most precise signals alerts
</h2>
<a href="{{route('login')}}" class="link-btn">Get Started</a>
</div>
<div class="content-sub content-two">
<img src="{{asset('assets/videos/MockUpSignalasApp1.png')}}" alt="" id="laptop-img" draggable="false">
</div>
</div>
</div>
<!-- End Of Hero one -->

<!-- Hero two -->
<div class="hero hero-two">
<video autoplay loop muted plays-inline class="back-video" src="{{asset('assets/videos/Video2.mp4')}}" type="video/mp4">
</video>

<div class="content-2">
	<!---->
	<div class="content-2-sub">
	<h1 class="h1-title">Market Watchlist</h1>
	</div>
	<!---->

	<!---->
	<div class="content-2-sub content-two">
	<!---->
	<div class="z-index-images">
	<img class="images one"src="{{asset('assets/images/Mockupchart2.png')}}" alt="" id="chart-dashboard-img" draggable="false">
	<img class="images two"src="{{asset('assets/images/MockUpSignalasApp2.png')}}" alt="" id="phone-img" draggable="false">
	</div>
	<!---->
	<!---->
	<div class="ul-list">
	<ul>
	<li>-Immediate notifications to mobile and desktop</li>
	<li>-Full Screen charts</li>
	<li>-Automatic notifications about<br>
	increased violatility and market movements</li>
	<li>-Recommended brokers</li>
	<li>-90% Accuracy</li>
	<li>-Support 24/7</li>
	</ul>
	</div>
	<!---->
	</div>
	<!---->

	<!---->
	<a href="{{route('login')}}" class="link-btn">Get Started</a>
	<!---->
</div>


</div>
<!-- End Of Hero two -->

<!-- Hero three -->
<div class="hero hero-three" >
<video autoplay loop muted plays-inline class="back-video" src="{{asset('assets/videos/Video3.mp4')}}" type="video/mp4">
</video>


<div class="content-3">
<!---->
<div class="content-3-sub content-3-sub-one">
	<img src="{{asset('assets/images/MockUpNews.png')}}" alt="" id="laptop-img" draggable="false">
	<div class="market-news">
	<h1 class="h1-title">Market News</h1>
	<div class="market-news-span">
	Read news about the Forex marketto help you
	make the best investment and grow your wealth.
	Receive alerts of when to buy or sell to make
	smart investments with only one click.
	</div>
	</div>
</div>
<!---->

<!---->
<div class="content-3-sub content-3-sub-two">
	<a href="{{route('register')}}" class="link-btn">Start Now</a>
</div>
<!---->
</div>
</div>
<!-- End Of Hero three -->


<!---->
<footer class="blw-footer">
<div class="blw-footer">
<ul class="blw-footer-sub-1">
	<li>Invest</li>
	<li>Brokers</li>
	<li>Subscription</li>
	<li>About</li>
	<li>FAQs</li>
</ul>
<h3 class="blw-footer-sub-2">
	Get Your Wealth on BLW.
</h3>
<div class="blw-footer-sub-3">
	<div class="footer-email-support-desc">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M10.5 8C6.9280619 8 4 10.928062 4 14.5L4 33.5C4 37.071938 6.9280619 40 10.5 40L37.5 40C41.071938 40 44 37.071938 44 33.5L44 14.5C44 10.928062 41.071938 8 37.5 8L10.5 8 z M 10.5 11L37.5 11C39.450062 11 41 12.549938 41 14.5L41 15.605469L24 24.794922L7 15.605469L7 14.5C7 12.549938 8.5499381 11 10.5 11 z M 7 19.015625L23.287109 27.820312 A 1.50015 1.50015 0 0 0 24.712891 27.820312L41 19.015625L41 33.5C41 35.450062 39.450062 37 37.5 37L10.5 37C8.5499381 37 7 35.450062 7 33.5L7 19.015625 z"/></svg> &nbsp; support@blwonlinetrading.com
	</div>
	<ul class="footer-social-icon-links">
		<li class="svg-icons">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M42,11.5v25c0,3.03-2.47,5.5-5.5,5.5H31V28h3.62c0.51,0,0.94-0.38,1-0.88l0.37-3c0.04-0.28-0.05-0.57-0.24-0.78 C35.56,23.12,35.29,23,35,23h-4v-3.5c0-1.1,0.9-2,2-2h2c0.55,0,1-0.45,1-1v-3.38c0-0.51-0.4-0.94-0.91-0.99 C35.03,12.12,33.62,12,31.83,12c-4.4,0-6.83,2.62-6.83,7.37V23h-4c-0.55,0-1,0.45-1,1v3c0,0.55,0.45,1,1,1h4v14H11.5 C8.47,42,6,39.53,6,36.5v-25C6,8.47,8.47,6,11.5,6h25C39.53,6,42,8.47,42,11.5z"/></svg>
		</li>

		<li class="svg-icons">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path d="M7.546875 0C3.390625 0 0 3.390625 0 7.546875L0 18.453125C0 22.609375 3.390625 26 7.546875 26L18.453125 26C22.609375 26 26 22.609375 26 18.453125L26 7.546875C26 3.390625 22.609375 0 18.453125 0 Z M 7.546875 2L18.453125 2C21.527344 2 24 4.46875 24 7.546875L24 18.453125C24 21.527344 21.53125 24 18.453125 24L7.546875 24C4.472656 24 2 21.53125 2 18.453125L2 7.546875C2 4.472656 4.46875 2 7.546875 2 Z M 20.5 4C19.671875 4 19 4.671875 19 5.5C19 6.328125 19.671875 7 20.5 7C21.328125 7 22 6.328125 22 5.5C22 4.671875 21.328125 4 20.5 4 Z M 13 6C9.144531 6 6 9.144531 6 13C6 16.855469 9.144531 20 13 20C16.855469 20 20 16.855469 20 13C20 9.144531 16.855469 6 13 6 Z M 13 8C15.773438 8 18 10.226563 18 13C18 15.773438 15.773438 18 13 18C10.226563 18 8 15.773438 8 13C8 10.226563 10.226563 8 13 8Z"/></svg>
		</li>

		<li class="svg-icons">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M44.898438 14.5C44.5 12.300781 42.601563 10.699219 40.398438 10.199219C37.101563 9.5 31 9 24.398438 9C17.800781 9 11.601563 9.5 8.300781 10.199219C6.101563 10.699219 4.199219 12.199219 3.800781 14.5C3.398438 17 3 20.5 3 25C3 29.5 3.398438 33 3.898438 35.5C4.300781 37.699219 6.199219 39.300781 8.398438 39.800781C11.898438 40.5 17.898438 41 24.5 41C31.101563 41 37.101563 40.5 40.601563 39.800781C42.800781 39.300781 44.699219 37.800781 45.101563 35.5C45.5 33 46 29.398438 46.101563 25C45.898438 20.5 45.398438 17 44.898438 14.5 Z M 19 32L19 18L31.199219 25Z"/></svg>
		</li>
	</ul>
</div>
</div>

<div class="blw-footer-copyright">
<div class="blw-footer-copyright-inner">
BLW is a purposeful investing platform, we aim at getting people richer throught forex investments
in the easiest way possible to them. Grow Wealth through us.
</div>
</div>
</footer>
<!---->


</main>	
</body>
</html>
