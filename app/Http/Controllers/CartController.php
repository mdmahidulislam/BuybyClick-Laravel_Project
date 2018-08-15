<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Cart;

class CartController extends Controller
{
    
    public function index(Request $request)
    {
        $cartProducts=Cart::Content();

        // return [$cartProducts];

        return view('cart.index',['cartProducts'=> $cartProducts]);
    }
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart');
    }
    public function addtocart(Request $request)
    {
        $productId=$request->id;

        $productDetails=DB::table('products')
            ->where('id',$productId)
            ->first();

        Cart::Add([
            'id'=>$productId,
            'name'=>$productDetails->productname,
            'price'=>$productDetails->price,
            'qty'=>$request->quantity
        ]);

        return redirect('/cart');
    }
}
