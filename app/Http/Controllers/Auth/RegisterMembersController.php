<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterMembersController extends Controller
{
    //
    use RegistersUsers;

    protected $redirectTo = '/home';

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'membershipNo' => ['required'],
            'phoneNumber' => ['required'],
            'gender' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'membership_no' => $data['membership_no'],
            'phone_number' => $data['phone_number'],
            'gender' => $data['gender'],
            'password' => Hash::make($data['password']),
        ]);
    }


}
