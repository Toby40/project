<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandAgentController extends Controller
{
    //
    public function registerForm()
    {
        return view('auth.register_agent');
    }
}
