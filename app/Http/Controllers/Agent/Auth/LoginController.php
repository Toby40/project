<?php

namespace App\Http\Controllers\Agent\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo = '/agent';

    public function __construct()
    {
        $this->middleware('guest:agent')->except('logout');
    }

    public function showLoginForm()
    {
        return view('Agent.login');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('agent.login');
    }

    protected function guard()
    {
        return Auth::guard('agent');
    }

}
