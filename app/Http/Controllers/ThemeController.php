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
}
