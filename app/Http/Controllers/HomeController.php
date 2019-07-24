<?php

namespace App\Http\Controllers;

use App\Land;
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

    public function agentDashboard()
    {
        return view('Agent.dashboard');
    }

    public function staffDashboard()
    {
        return view('Staff.dashboard');
    }

    public function memberDashboard()
    {
        $lands = Land::query()->get()->all();
        return view('Member.dashboard',compact('lands'));
    }
}
