<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registrationController extends Controller
{
    public function views()
    {
        return view('log.registration');
    }

    public function back()
    {
        return view('welcome');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'npm' => 'required|unique:users',
            'numberPhone' => 'required',
            'password' => 'required|confirmed'
        ]);
        // dd($request->all());
        

        $data['name'] = $request->name;
        $data['npm'] = $request->npm;
        $data['numberPhone'] = $request->numberPhone;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if (!$user) {
            return redirect(route('Registration'))->with('Error', 'Registration failed, try again');
        }
        return redirect(route('Login'))->with('Success', 'Registration success!!');
    }
}
