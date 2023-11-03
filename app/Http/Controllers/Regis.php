<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class Regis extends Controller
{
    public function regis()
    {
        return view('Log.Regis.index');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:75',
            'npm' => 'required|min:7|max:9',
            'no_telp' => 'required|max:13',
            'password' => 'required|min:1|max:255'
        ]);

        // Buat pengguna baru
        $user = \App\Models\User::create([
            'name' => $request->name,
            'npm' => $request->npm,
            'no_telp' => $request->no_telp,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);


        return redirect()->intended('/');
    }
}
