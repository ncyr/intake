<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function company_setup()
    {
        return view('company_setup');
    }

    public function add_ons()
    {
        return view('add_on_setup');
    }

    public function company_contacts()
    {
        return view('company_contacts');
    }
    public function store_settings()
    {
        return view('store_settings');
    }
}
