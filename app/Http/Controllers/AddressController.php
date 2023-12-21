<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function Adress(){
        return view('seller.create.createAddress');
    }

    public function addAdress(Request $request){
        $request->validate([
            'address'=>'required|string'
        ]);

        $addAdress = [
            'id_user' => Auth::user()->id,
            'address' => $request->address
        ];

        Address::create($addAdress);

        return redirect()->route('Profile.Buyer')->with('success', 'Product added successfully.');
    }
}
