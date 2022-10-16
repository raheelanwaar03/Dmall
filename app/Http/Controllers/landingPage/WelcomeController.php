<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function landingPage()
    {
        return view('LandingPage.welcome');
    }

    public function aboutUs()
    {
        return view('LandingPage.aboutUs');
    }

    public function contactUs()
    {
        return view('LandingPage.contactUs');
    }
}
