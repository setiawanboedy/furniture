<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // $products = Product::get()->take(6);
        $products = Product::paginate(12);
        // dd($paginates);
        $categories = Product::select('category')->distinct()->get();
        return view('pages.product',[
            'products'=>$products,
            'categories'=>$categories
        ]);
    }
}
