<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\GeneralInfo;
use App\Models\Home;
use App\Models\Skill;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome')->with([
            'general' => GeneralInfo::get()->first(),
            'contact' => Contact::get()->first(),
            'home' => Home::get()->first(),
            'about' => AboutUs::get()->first(),
            'skills' => Skill::orderBy('order')->get()
        ]);
    }
}
