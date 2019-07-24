<?php

namespace App\Http\Controllers;

use App\Land;
use Illuminate\Http\Request;

class LandsController extends Controller
{
    //
    public function verifyLand($id)
    {
//        $res = Land::query()->where('id',$id)->get();
//        print_r($res);exit;

        $updateLand = Land::query()->where('id',$id)->update([
            'land_status' => 1
        ]);

        return redirect('/staff/dashboard')->with('success', 'successfully verified land');
    }

    public function viewLand($id)
    {
    	return view('Member.reserve_land');
    }

    public function reserveLand($id)
    {
    	
    }
}
