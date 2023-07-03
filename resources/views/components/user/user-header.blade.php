<header>
<div id="fx-logo-content">
<div id="mob-hamburger">
<button class="btn-one" id="mob-ham-btn" aria-controls="primary-navigation" aria-expanded="false">
<svg  fill="var(--btn-color)" class="hamburger-svg" viewBox="0 0 100 100">
<rect class="line top" width="80" height="10" x="10" y="25" rx="5"></rect>
<rect class="line middle" width="80" height="10" x="10" y="45" rx="5"></rect>
<rect class="line bottom" width="80" height="10" x="10" y="65" rx="5"></rect>
</svg>
</button>
</div>
<div id="fx-logo">
<img src="{{asset('assets/images/logo-transparent.png')}}" alt="" srcset="">
</div>
</div>
<div id="fx-profile">
<div id="fx-user-amount">
<div class="user-amount-desc">{{ Auth::user()->firstname }}</div>
<div class="user-amount-no">
&dollar; <span>15,665.00</span>
</div>
</div>

<div id="fx-user-profile"  @click="show = !show">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
<circle cx="12" cy="12" r="10" opacity=".35"  />
<circle cx="12" cy="9" r="3"  />
<path d="M17.883,15.784C17.574,14.755,16.63,14,15.5,14h-7c-1.13,0-2.074,0.755-2.383,1.784C7.362,17.717,9.529,19,12,19S16.638,17.717,17.883,15.784z" />
</svg>
<!-- <img src="./images/profile.svg" alt=""> -->
</div>
</div>
<div id="fx-user-dropdown" x-show="show">
<div id="fx-user-inner-dropdown">
<a href="{{route('profile.edit')}}">
<div class="icon">
<svg>
<use href="{{asset('assets/images/icons.svg#user-profile-icon')}}"></use>
</svg>
</div>
<div class="icon-desc">Profile</div>
</a>


<form action="{{route('logout')}}" method="post">
@csrf
<button id="logout-form" type="submit">
<div class="icon">
<svg>
<use href="{{asset('assets/images/icons.svg#logout-icon')}}"></use>
    </svg>
</div>
<div class="icon-desc">Logout</div>
</button>
</form>

</div>
</div>
</header>
