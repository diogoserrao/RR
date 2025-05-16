<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));
        return view('contact', compact('cartCount'));
    }
}
