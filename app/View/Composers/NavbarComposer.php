<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Cart;

class NavbarComposer
{

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $user = Auth::user();
        if ($user != null) {
            $cart = Cart::where('user_id', $user->id)->get()->count();
            $view->with('cartCount', $cart);
        }
        $view->with('user', $user);

    }
}
