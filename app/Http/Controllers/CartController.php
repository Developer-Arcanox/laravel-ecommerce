<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // $user = auth()->user();
        $user = Auth::user();

        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $request->productID)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $request->productID,
                'quantity' => 1
            ]);
        }

        return redirect()->route("cart.index");
    }

    public function showCart()
    {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();

        return view('cart', compact('cartItems'));
    }

    public function removeFromCart(Request $request)
    {
        Cart::where('user_id', Auth::id())
            ->where('product_id', $request->productID)
            ->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}
