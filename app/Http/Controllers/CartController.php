<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = []; // Busca os itens do carrinho (exemplo)
        $subtotal = 0;
        $cartItems = session('cart', []);
        $cart = session('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));
        return view('cart', compact('cartItems', 'subtotal', 'cartItems', 'cartCount'));
    }

    public function add(Request $request)
    {
        // Exemplo simples: adicionar à sessão
        $cart = session()->get('cart', []);
        $id = $request->input('product_id');
        $qty = $request->input('quantity', 1);

        // Aqui você buscaria o produto no banco de dados
        $product = \App\Models\Product::findOrFail($id);

        // Adiciona ou atualiza o produto no carrinho
        $cart[$id] = [
            'id' => $product->id,
            'name' => $product->name,
            'brand' => $product->brand->name,
            'image' => $product->image_url,
            'price' => $product->discounted_price,
            'original_price' => $product->price,
            'quantity' => $qty,
            'rating' => $product->reviews_count,
        ];
        session(['cart' => $cart]);

        return redirect()->route('cart');
    }

    public function remove(Request $request)
    {
        $id = $request->input('product_id');
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session(['cart' => $cart]);
        }
        return redirect()->route('cart');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('cart');
    }
}
