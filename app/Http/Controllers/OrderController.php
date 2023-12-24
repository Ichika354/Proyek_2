<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function views($id)
    {
        $products = Product::with('category')->findOrFail($id);
        $buyer = Auth::user();
        $addresses = $buyer->address;


        return view('buyer.orderBuyer', compact('products','addresses'));
    }

    public function checkout(Request $request)
    {
        $jumlah = $request->input('jumlah');
        $harga = $request->input('harga') * (10 / 100) + $request->input('harga');
        $id_produk = $request->input('id_produk');
        $id_address = $request->input('id_address');
        $total_price = $jumlah * $harga;

        $stok = $request->input('stok');

        if ($jumlah > $stok) {
            return redirect()->back()->with('error', 'Jumlah produk yang diminta melebihi stok yang tersedia.');
        }

        // Menambahkan total_price dan status ke dalam request
        $request->merge([
            'total_price' => $total_price,
            'status' => 'Unpaid',
        ]);

        $dataOrder = [
            'id_user' => Auth::user()->id, // Mendapatkan ID pengguna yang login
            'qty' => $request->jumlah,
            'total_price' => $request->total_price,
            'id_address' => $request->id_address,
        ];

        // dd($dataOrder);
        // Membuat dan menyimpan order ke dalam database
        $order = Order::create($dataOrder);

        $newStok = $stok - $jumlah;
        $product = Product::find($id_produk);
        $product->update(['stock' => $newStok]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name'       => $request->name,
                'phone'      => $request->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $products = Product::findOrFail($id_produk);
        return view('buyer.checkoutBuyer', compact('snapToken', 'order', 'products'));
    }

    public function callback(Request $request)
    {
        $server_key = config('midtrans.server_key');
        $hashed = hash('sha521', $request->order_id . $request->status_code . $request->gross_amount . $server_key);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Paid']);
            }
        }
    }
}
