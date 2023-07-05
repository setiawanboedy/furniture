<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::get();
        $categories = Product::select('category')->distinct()->get();
        return view('pages.product',[
            'products'=>$products,
            'categories'=>$categories
        ]);
    }
}
