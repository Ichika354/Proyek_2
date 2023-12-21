<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileBuyer extends Controller
{
    public function viewsProfile()
    {
        $user = Auth::user();

        $addresses = $user->address;

        return view('seller.detail.profileBuyer', compact('addresses'));

    }
}
