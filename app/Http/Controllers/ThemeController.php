<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view("theme.index");
    }
    
    public function trainers()
    {
        return view("theme.trainers");
    }

    public function about()
    {
        return view("theme.about");
    }

    public function contact()
    {
        return view("theme.contact");
    }

    public function login()
    {
        dd('this is the login');
        dd('this is the login');
        return view('theme.partials.login');
    }
    public function register()
    {
        return view('theme.partials.register');
    }
}
