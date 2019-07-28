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

        // return response()->json(['message' => 'successfully verified land']);
        return redirect('staff/dashboard');
    }

    public function viewLand($id)
    {

    	return view('Member.reserve_land');
    }

    public function reserveLand($id)
    {
    	
    }
}
