<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session("cart",[]);
        return view('Cart.Index',['records' => $cart]);
    }

    public function add($id)
    {
         $cart = session("cart",[]);
          if (isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $p = Product::find($id);
            $cart[$id] = [
                'id' => $p->id,    
                'name'  => $p->name,    // full Product model object
                'qty' => 1,
                'price' => $p->price,
            ];
        }
        session()->put('cart', $cart);

        return view('Cart.Index',['records' => $cart]);
    }

    public function delete($id)
    {
        $cart = session("cart",[]);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect('/')->with('success', 'Item removed');
    }

  public function increase(Product $product)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty']++;
            session()->put('cart', $cart);
        }
         return view('Cart.Index',['records' => $cart]);
    }

    public function decrease(Product $product)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty']--;
            if ($cart[$product->id]['qty'] <= 0) {
                unset($cart[$product->id]); // remove if zero
            }
            session()->put('cart', $cart);
        }
         return view('Cart.Index',['records' => $cart]);
    }
    
}
