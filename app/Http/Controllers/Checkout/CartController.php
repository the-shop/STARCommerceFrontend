<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function view()
    {
        return view('checkout/cart');
    }
}
