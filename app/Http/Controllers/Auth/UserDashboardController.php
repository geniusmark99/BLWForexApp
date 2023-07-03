<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{

    public function Dashboard()
    {
        return view('users.dashboard');
    }

    public function Quotes()
    {
        return view('users.quotes');
    }

    public function Charts()
    {
        return view('users.charts');
    }

    public function Trade()
    {
        return view('users.trade');
    }

    public function News()
    {
        return view('users.news');
    }


    public function Account()
    {
        return view('users.account');
    }
}
