<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductRating;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(Request $request, $product_id)
    {
        return view('pages.review',[
            'product_id'=>$product_id
        ]);
    }

    public function review(Request $request){
        $request->validate([
            'rating'=>'required|integer',
            'comment'=>'required|string'
        ]);

        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        $data['username'] = Auth::user()->name;

        ProductRating::create($data);

        return redirect()->route('user-trans.index');

    }
}
