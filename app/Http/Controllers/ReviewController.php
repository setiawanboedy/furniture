<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductRating;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function review(Request $request, $guideId){
        $request->validate([
            'rating'=>'required|integer',
            'comment'=>'required|string'
        ]);

        $data = $request->all();
        $data['guides_id'] = $guide->id;
        $data['users_id'] = Auth::user()->id;
        $data['username'] = Auth::user()->username;

        ProductRating::create($data);

        return redirect()->route('product-front');

    }
}
