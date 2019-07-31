<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        print_r($data);exit;
        //register agent
        if(isset($data['agent'])){
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'role_id' => 4,
                'password' => Hash::make($data['password']),
            ]);

        }else{
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'role_id' => 2,
                'password' => Hash::make($data['password']),
            ]);
        }

//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
    }

//    protected function authenticated(Request $request, $user)
//    {
//        if($user->role_id == 1){
//            return redirect()->to('/home');
//        }else if($user->role_id == 4){
//            return redirect()->to('/agent/dashboard');
//        }else if($user->role_id == 3){
//            return redirect()->to('/staff/dashboard');
//        }else{
//            return redirect()->to('/member/dashboard');
//        }
//    }

    protected function redirectTo()
    {
        if(Auth::user()->role_id == 2){
            return '/member/dashboard';
        }elseif (Auth::user()->role_id == 4){
            return "/agent/dashboard";
        }
        return "/home";
    }
}
