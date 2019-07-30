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
        $lands = Land::query()->where('land_status',1)->get()->all();

        return view('Agent.dashboard',compact('lands'));
    }

    public function getLand($id)
    {
        $land = Land::query()->where('land_status',1)->first();
        return view('Agent.update_land',compact('land'));
    }

    public function updateLand(Request $request,$id)
    {
        $land = Land::query()->where('id',$id)->update([
            'title_no' => $request->get('title_no'), 
            'land_size' => $request->get('land_size'), 
            'land_location' => $request->get('land_location'),
             'land_price' => $request->get('land_price')
        ]);


        return redirect('/agent/dashboard');
    }

    public function staffDashboard()
    {
        $lands = Land::query()->where('land_status',0)->get()->all();

        return view('Staff.dashboard',compact('lands'));
    }

    public function memberDashboard()
    {
        $lands = Land::query()->where('land_status',1)->get()->all();
        return view('Member.dashboard',compact('lands'));
    }
}
