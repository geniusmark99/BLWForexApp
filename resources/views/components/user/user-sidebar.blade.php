{{-- SIDEBAR --}}
<div id="sidebar">
    <ul>
    <li>
    <a href="{{route('user.dashboard')}}" 
    :class="page === 'dashboard' && 'active'"
    >
    <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <use href="{{asset('assets/images/icons.svg#home-svg-icon')}}" />
    </svg>
    </div>
    <div class="icon-desc">Home</div>
    </a>
    </li>

    <li>
    <a href="{{route('user.quotes')}}"
    :class="page === 'quotes' && 'active'"
    >
    <div class="icon">
    <svg>
    <use href="{{asset('assets/images/icons.svg#quote-svg-icon')}}" />
    </svg>
    </div>
    <div class="icon-desc">Quotes</div>
    </a>
    </li>

    <li>
    <a href="{{route('user.charts')}}"
    :class="page === 'charts' && 'active'"
    >
    <div class="icon">
    <svg>
    <use href="{{ asset('assets/images/icons.svg#chart-svg-icon')}}" />
    </svg>
    </div>
    <div class="icon-desc">Charts</div>
    </a>
    </li>

    <li>
    <a href="{{route('user.trade')}}"
    :class="page === 'trade' && 'active'"
    >
    <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <use href="{{ asset('assets/images/icons.svg#trade-svg-icon')}}" />
    </svg>
    </div>
    <div class="icon-desc">Trade</div>
    </a>
    </li> 


    <li>
    <a href="{{route('user.news')}}"
    :class="page === 'news' && 'active'"
    >
    <div class="icon">
    <svg>
    <use href="{{ asset('assets/images/icons.svg#news-svg-icon')}}" />
    </svg>
    </div>
    <div class="icon-desc">News</div>
    </a>
    </li>


    <li>
    <a href="{{route('user.account')}}"
    :class="page === 'account' && 'active'"
    >
    <div class="icon">
    <svg>
    <use href="{{ asset('assets/images/icons.svg#account-svg-icon')}}" />
    </svg>
    </div>
    <div class="icon-desc">Account</div>
    </a>
    </li> 



    </ul>
</div>
{{-- SIDEBAR END --}}