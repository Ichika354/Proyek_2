<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class AddressController extends Controller
{

    public function Adress()
    {
        $provinces = Province::all();
        return view('seller.create.createAddress', compact('provinces'));
    }

    public function getkabupaten(Request $request)
    {
        $idProvinsi = $request->idProvinsi;

        $kabupatens = Regency::where('province_id', $idProvinsi)->get();

        foreach ($kabupatens as $kabupaten) {
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
    }

    public function getkecamatan(Request $request)
    {
        $idKabupaten = $request->idKabupaten;

        $kecamatans = District::where('regency_id', $idKabupaten)->get();

        foreach ($kecamatans as $kecamatan) {
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
    }

    public function getdesa(Request $request)
    {
        $idKecamatan = $request->idKecamatan;

        $desas = Village::where('district_id', $idKecamatan)->get();

        foreach ($desas as $desa) {
            echo "<option value='$desa->id'>$desa->name</option>";
        }
    }

    public function addAdress(Request $request)
    {
        $request->validate([
            'province_id' => 'required|string',
            'regency_id' => 'required|string',
            'district_id' => 'required|string',
            'village_id' => 'required|string',
            'patokan' => 'required|string|max:255',
        ]);

        $addAdress = [
            'id_user' => Auth::user()->id,
            'province_id' => $request->province_id,
            'regency_id' => $request->regency_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'patokan' => $request->patokan
        ];

        Address::create($addAdress);

        return redirect()->route('Profile.Buyer')->with('success', 'Address added successfully.');
    }

    public function editAdressView($id)
    {
        $address = Address::findOrFail($id);
        $provinces = Province::all();

        return view('seller.update.addressUpdate', compact('address', 'provinces'));
    }

    public function editAdress(Request $request, $id)
    {
        $request->validate([
            'province_id' => 'required|string',
            'regency_id' => 'required|string',
            'district_id' => 'required|string',
            'village_id' => 'required|string',
            'patokan' => 'required|string|max:255',
        ]);

        $address = Address::findOrFail($id);
        $address->update([
            'province_id' => $request->province_id,
            'regency_id' => $request->regency_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'patokan' => $request->patokan
        ]);

        return redirect()->route('Profile.Buyer')->with('success', 'Address updated successfully.');
    }

    public function deleteAdress($id)
    {
        $address = Address::findOrFail($id);

        if ($address->id_user == auth()->user()->id) {
            $address->delete();
            return redirect()->route('Profile.Buyer')->with('success', 'Address deleted successfully.');
        } else {
            return redirect()->route('Profile.Buyer')->with('error', 'You do not have permission to delete this product.');
        }
    }
}
