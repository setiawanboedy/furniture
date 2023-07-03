<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['product_galleries'])->get();
        // dd($products[0]->product_galleries);
        return view('pages.home',[
            'products'=>$products
        ]);
    }
}
