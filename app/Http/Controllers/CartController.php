<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addToCart(Request $request)
    {
        $data=$request->all();
        $productID=$data["productId"];
        if(Auth::check())
        {
            $cart=Cart::where(['user_id'=>Auth::id()])->first();
            
                if($cart){
                        $cart->Products()->attach([$productID]);
                        return response()->json(['status'=> ' 1 added to cart successfully']);
                        // return response()->json(['status'=> $productCheck->title.' Already added to cart.']);?
                }
                else
                {
                        $cartItem = new Cart();
                //     $cartItem->product_id = $productID;
                        $cartItem->user_id = Auth::id();
                        $cartItem->save();
                        $cartItem->Products()->attach([$productID]);
                        return response()->json(['status'=> ' 2 added to cart successfully']);
                }
            
        }
        else{
            return response()->json(['status'=>'Login to continue']);
        }
    }
    public function showCartItems($id){
        // DB::enableQueryLog();
        $cartData = Cart::with(['User', 'Products'])->where(['user_id'=>$id])->first();
        dd($cartData);
        // dd(\DB::getQueryLog());
        // dd($cartData);
        return \response()->json($cartData);
    }
}
