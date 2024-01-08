<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function views($id)
    {
        $products = Product::with('category')->findOrFail($id);
        $buyer = Auth::user();
        $addresses = $buyer->address;


        return view('buyer.orderBuyer', compact('products', 'addresses'));
    }

    public function checkout(Request $request)
    {
        $jumlah = $request->input('jumlah');
        $harga = $request->input('harga') * (20 / 100) + $request->input('harga');
        $id_produk = $request->input('id_produk');
        $id_address = $request->input('id_address');
        $id_seller = $request->input('id_seller');
        $total_price = $jumlah * $harga;

        $stok = $request->input('stok');

        if ($jumlah > $stok) {
            return redirect()->back()->with('error', 'Jumlah produk yang diminta melebihi stok yang tersedia.');
        }

        $request->merge([
            'total_price' => $total_price,
            // 'status' => 'Unpaid',
        ]);

        $dataOrder = [
            'id_user' => Auth::user()->id,
            'qty' => $request->jumlah,
            'total_price' => $request->total_price,
            'id_address' => $request->id_address,
            'id_seller' => $request->id_seller,
            'id_product' => $request->id_produk,
        ];

        $order = Order::create($dataOrder);

        $newStok = $stok - $jumlah;
        $product = Product::find($id_produk);
        $product->update(['stock' => $newStok]);

        $products = Product::findOrFail($id_produk);
        // dd($order);
        return view('buyer.checkoutBuyer', compact('order', 'products'));
    }


    public function transaction(Request $request)
    {
        $request->validate([
            'transaction_proof' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('transaction_proof');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/bukti'), $imageName);

        $transaction = [
            'id_order' => $request->id_order,
            'id_seller' => $request->id_seller,
            'id_buyer' => $request->id_user,
            'transaction_proof' => $imageName
        ];

        Transaction::create($transaction);
        

        return redirect()->route('Product.Seller')->with('success', 'Produk Berhasil Dibeli!!.');
    }
}
