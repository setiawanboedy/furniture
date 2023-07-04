<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.payment-confirm'
        );
    }

    public function upload(Request $request, $id)
    {
        // return view('pages.success');
    }
}
