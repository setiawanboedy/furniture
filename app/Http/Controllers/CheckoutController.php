<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $trans_id)
    {
        return view('pages.payment-confirm',[
            'trans_id'=>$trans_id
        ]
        );
    }

    public function upload(Request $request)
    {
        $request->validate([
            'prove'=> 'required|image'
        ]);
        $data = $request->all();
        $userId = Auth::user()->id;
        $trans = Transaction::findOrFail($request->trans_id);
        $trans->prove = $request->file('prove')->store(
            'assets/prove', 'public'
        );
        $trans->save();

        return redirect()->route('product-front');
    }
}
