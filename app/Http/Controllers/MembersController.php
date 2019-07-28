<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    //
    public function registerForm()
    {
        return view('auth.register_member');
    }
}
