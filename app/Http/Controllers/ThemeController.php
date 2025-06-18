<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view("theme.index");
    }

    public function skills()
    {
        return view("theme.skills");
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
        return view('theme.partials.login');
    }
    public function register()
    {
        return view('theme.partials.register');
    }
}
