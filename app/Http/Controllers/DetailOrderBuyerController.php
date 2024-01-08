<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DetailOrderBuyerController extends Controller
{
    public function detail()
    {
        // Mendapatkan pengguna yang login
        $buyer = Auth::user();

        $details = $buyer->order()->with('product')->get();


        return view('buyer.detailOrder', compact('details'));
    }

    public function viewDetail()
    {
        $seller = Auth::user();
        $orders = $seller->orders()->with(['product', 'transaction'])->get();

        // dd($orders);

        return view('seller.detail.detailOrder', compact('orders'));
    }

    public function viewDetailStatus($id)
    {
        $status = Transaction::with('order')->findOrFail($id);

        return view('seller.detail.detailStatusOrder', compact('status'));
    }

    // TransactionController.php
    public function updateStatus(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        $request->validate([
            'status' => 'required|in:Unpaid,Paid',
        ]);

        $transaction->update([
            'status' => $request->status,
        ]);

        return redirect()->route('Detail.Order.Seller')->with('success', 'Status updated successfully');
    }
}
