<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(Request $request)
        {
        $product_count = Product::count();
        $trans_count = Transaction::count();
        $trans_success_count = Transaction::where('transaction_status','SUCCESS')->count();
        $trans_pending_count = Transaction::where('transaction_status','PENDING')->count();
        return view('pages.admin.dashboard',[
            'product_count'=>$product_count,
            'trans_count'=>$trans_count,
            'trans_success_count'=>$trans_success_count,
            'trans_pending_count'=>$trans_pending_count
        ]);
        }
}
