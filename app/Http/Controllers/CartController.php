<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function clearAllCart()
    {
        Cart::clear();
        // session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.list');
    }
}
