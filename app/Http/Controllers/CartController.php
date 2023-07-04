<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CartController extends Controller
{
    public function cartList()
    {
        $userId = Auth::user()->id;
        $cartItems = Cart::where('user_id',$userId)->get();
        $products = collect($cartItems);

        $total = $products->sum('total');
        return view('pages.cart', [
            'cartItems'=>$cartItems,
            'total'=> $total
        ]);
    }

    public function addToCart(Request $request)
    {

        $data = $request->all();
        $idItem = Cart::where('product_id',$request->product_id)->first();
        $userId = Auth::user()->id;
        if ($idItem) {
            $cart = Cart::where('product_id',$request->product_id)->first();

            $data['quantity'] = $cart->quantity + $request->quantity;
            $data['total'] = $cart->total * $request->quantity;
            $data['user_id'] = $userId;
            $cart->update($data);
        }else{

            $data['total'] = $request->price * $request->quantity;
            $data['user_id'] = $userId;
            Cart::create($data);
        }
        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        $data = $request->all();
        $userId = Auth::user()->id;
        $cart = Cart::where('product_id',$request->product_id)->first();
        $data['quantity'] = $request->quantity;
        $data['total'] = $cart->price * $data['quantity'];
        $data['user_id'] = $userId;
        $cart->update($data);

        return redirect()->route('cart.list');
    }

    public function removeCart($id)
    {

        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()->route('cart.list');
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'province'=> 'required',
            'state'=> 'required',
            'postcode'=> 'required',
        ]);
        $data = $request->all();
        $userId = Auth::user()->id;

        $transaction = Transaction::create([
            'users_id' => $userId,
            'address' => $request->province.', '.$request->state.', '.$request->postcode,
            'date' => Carbon::now(),
            'transaction_total' => $request->transaction_total,
            'transaction_status' => 'PENDING'
        ]);

        $carts = Cart::where('user_id', $userId)->get();
        for ($i=0; $i < count($carts); $i++) {

            TransactionDetail::create([
                'transaction_id'=> $transaction->id,
                'product_id'=> $carts[$i]->product_id,
                'image'=> $carts[$i]->image,
                'name'=>$carts[$i]->name,
                'price'=>$carts[$i]->price,
                'quantity'=>$carts[$i]->quantity,
                'total'=> $carts[$i]->total
            ]);
        }

        return redirect()->route('payment.index', $transaction->id);
    }
}
