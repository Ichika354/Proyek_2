<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function views()
    {
        if (Auth::check()){
            return redirect(route('BackHome'));
        }
        return view('log.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'npm'      => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('npm', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('Dashboard'));
        }
        return redirect(route('Login'))->with('Error', 'Login details are not valid');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect(route('Login'));
    }
}
