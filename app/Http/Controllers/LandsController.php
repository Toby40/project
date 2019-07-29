<?php

namespace App\Http\Controllers;

use App\Land;
use Illuminate\Http\Request;
Use Carbon\Carbon;

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

    public function landsData()
    {
        $monthly_range = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

        $registrations_arr = [];

        foreach ($monthly_range as $range) {

            $unverified = Land::query()
                ->where('land_status', 0)
                ->whereYear('lands.created_at', Carbon::now()->year)
                ->whereMonth('lands.created_at', '=', $range)
                ->count();


            $verified = Land::query()
                ->where('land_status', 1)
                ->whereYear('lands.created_at', Carbon::now()->year)
                ->whereMonth('lands.created_at', '=', $range)
                ->count();

            array_push($registrations_arr, ['unverified' => $unverified, 'verified' => $verified, 'month' => Carbon::create(null, $range)->format('M')]);
        }

        $data_array['verified'] = array_pluck($registrations_arr, 'verified');
        $data_array['unverified'] = array_pluck($registrations_arr, 'unverified');
        $data_array['month'] = array_pluck($registrations_arr, 'month');

        return response()->json($data_array);

    }
}
