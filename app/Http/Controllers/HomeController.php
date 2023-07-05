<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecommendationGuideController;


class HomeController extends Controller
{
    public function index(Request $request, RecommendationProductController $recommendC)
    {
        $products = Product::get();
        $user = Auth::user();
        $categories = Product::select('category')->distinct()->get();

        if ($user != null) {
            $recommendations = $recommendC->generateRecommendations($user->id,4);

            return view('pages.home',[
                'products'=>$products,
                'recommendations'=>$recommendations,
                'categories'=>$categories
            ]);
        }else{
            return view('pages.home',[
                'products'=>$products,
                'categories'=>$categories
            ]);
        }
    }
}
