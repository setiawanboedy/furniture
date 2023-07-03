<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionUserController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $transactions = Transaction::where('users_id', $user->id)->get();
        return view('pages.transaction',[
            'transactions'=>$transactions
        ]);
    }
}
