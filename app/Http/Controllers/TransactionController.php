<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function view(){
        $orders = Order::with(['product', 'transaction'])->get();
    
        return view('admin.transaksiDetail', compact('orders'));
    }
    
}
