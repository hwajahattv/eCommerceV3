<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cat_data= Category::all();
        $pro_data=Product::all();
        return view('user.panel.home',['catdata'=>$cat_data, 'prodata'=>$pro_data]);
    }

    public function shop()
    {
        $cat_data= Category::with('parent')->get();
        // dd($cat_data);
        $pro_data=Product::all();
        // dd($pro_data);
        return view('user.panel.shop',['catdata'=>$cat_data, 'prodata'=>$pro_data]);
    }
    public function blog1()
    {
      
        return view('user.blogs.blog_coffee');
    }
    public function blog2()
    {
      
        return view('user.blogs.blog_fashion_italian');
    }
    public function blog3()
    {
      
        return view('user.blogs.blog_portfolio');
    }
    public function show1($id)
    {
        $product= Product::find($id);
        
        return \response()->json($product);
    }
    public function showCartItems($id)
    {
        $cart= Cart::where('user_id',$id)->get();
        
        return \response()->json($cart);
    }


}
