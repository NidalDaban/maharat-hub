<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\Country;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view("theme.index");
    }

    public function skills()
    {
        $users = User::with(['skills', 'country', 'languages'])->get();
        $skills = Skill::with(['classification'])->get();
        $classifications = Classification::all();
        $countries = Country::all();
        return view("theme.skills", [
            'users' => $users,
            'skills' => $skills,
            'classifications' => $classifications,
            'countries' => $countries,
        ]);
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
    public function privacyPolicy()
    {
        return view('theme.Important-links.privacy-policy');
    }
    public function termsOfServices()
    {
        return view('theme.Important-links.termsOfServices');
    }
}
