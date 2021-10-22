<?php

namespace App\Http\Controllers;

use App\Models\Home;

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
            'home' => Home::get()->first()
        ]);
    }
}
