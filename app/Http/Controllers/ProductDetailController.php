<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $product = Product::with(['product_galleries'])->where('slug', $slug)->firstOrFail();

        return view('pages.product-detail',[
            'product'=>$product
        ]);
    }
}
