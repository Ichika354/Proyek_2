<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;


class Login extends Controller
{
    public function login(){
        return view('Log.Login.index',[
            'title' => 'Login'
        ]);
    }
    public function back(){
        return view('main');
    }

    public function loginSystem(Request $request)
    {
        $credentials = $request->only('npm', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi sukses, arahkan ke halaman beranda admin
            return redirect()->intended('/admin/dashboard');
        } else {
            // Autentikasi gagal, arahkan kembali ke halaman login dengan pesan error
            return redirect()->back()->withErrors(['msg' => 'Login failed']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('Log.Login.index');
    }
}
