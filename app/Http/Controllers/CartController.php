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
            $productCheck=Product::where(['id'=>$productID])->first();
            if($productCheck){
                if(Cart::where(['product_id'=>$productID])->where('user_id',Auth::id())->exists()){
                    return response()->json(['status'=> $productCheck->title.' Already added to cart.']);
                }
                else
                {
                    $cartItem = new Cart();
                    $cartItem->product_id = $productID;
                    $cartItem->user_id = Auth::id();
                    $cartItem->save();
                    return response()->json(['status'=> $productCheck->title.' added to cart successfully']);
                }
            }else{
                return response()->json(['status'=> ' Problem identified']);

            }
        }
        else{
            return response()->json(['status'=>'Login to continue']);
        }
    }
    public function showCartItems($id){

    }
}
