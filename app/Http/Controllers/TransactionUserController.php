<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionUserController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $transactionDetails = Transaction::where('users_id', $user_id)
                                ->with('details')
                                ->get()
                                ->pluck('details')
                                ->flatten();
        
        return view('pages.transaction',[
            'transactions'=>$transactionDetails
        ]);
    }
}
