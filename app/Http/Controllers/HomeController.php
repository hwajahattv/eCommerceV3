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
        $cat_data = Category::all();
        $pro_data = Product::all();
        if (Auth::check()) {
            # code...
            $availableCart = Cart::where(['user_id' => Auth::id()])->first();
            // dd($cart);
            if (!empty($availableCart)) {
                $cartItemsCount = $availableCart->Products()->count();
            } else {
                $cartItemsCount = 0;
            }
        } else {
            $cartItemsCount = 0;
        }
        return view('user.panel.home', ['catdata' => $cat_data, 'prodata' => $pro_data, 'cartItemsCount' => $cartItemsCount]);
    }

    public function shop()
    {
        $cat_data = Category::with('parent')->get();
        $pro_data = Product::with('Category')->get();
        if (Auth::check()) {
            # code...
            $availableCart = Cart::where(['user_id' => Auth::id()])->first();
            // dd($cart);
            if (!empty($availableCart)) {
                $cartItemsCount = $availableCart->Products()->count();
            } else {
                $cartItemsCount = 0;
            }
        } else {
            $cartItemsCount = 0;
        }
        // dd($pro_data);
        return view('user.panel.shop', ['catdata' => $cat_data, 'prodata' => $pro_data, 'cartItemsCount' => $cartItemsCount]);
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
    public function blogPage()
    {
        $cat_data = Category::all();
        $pro_data = Product::all();
        if (Auth::check()) {
            # code...
            $availableCart = Cart::where(['user_id' => Auth::id()])->first();
            // dd($cart);
            if (!empty($availableCart)) {
                $cartItemsCount = $availableCart->Products()->count();
            } else {
                $cartItemsCount = 0;
            }
        } else {
            $cartItemsCount = 0;
        }

        return view('user.panel.blog', ['cartItemsCount' => $cartItemsCount]);
    }
    public function cartPage()
    {
        // $cat_data= Category::all();
        $pro_data = Product::all();
        if (Auth::check()) {
            # code...
            $availableCart = Cart::where(['user_id' => Auth::id()])->first();
            // dd($cart);
            if (!empty($availableCart)) {
                $cartItemsCount = $availableCart->Products()->count();
            } else {
                $cartItemsCount = 0;
            }
        } else {
            $cartItemsCount = 0;
        }
        $cartItemsOnPage = $availableCart->Products()->get();
        // dd($cartItemsOnPage);

        return view('user.panel.shoppingCart', ['cartItemsCount' => $cartItemsCount, 'cartItems' => $cartItemsOnPage]);
    }
    public function contactPage()
    {
        $cat_data = Category::all();
        $pro_data = Product::all();
        if (Auth::check()) {
            # code...
            $availableCart = Cart::where(['user_id' => Auth::id()])->first();
            // dd($cart);
            if (!empty($availableCart)) {
                $cartItemsCount = $availableCart->Products()->count();
            } else {
                $cartItemsCount = 0;
            }
        } else {
            $cartItemsCount = 0;
        }

        return view('user.panel.contactUs', ['cartItemsCount' => $cartItemsCount]);
    }
    public function aboutPage()
    {
        $cat_data = Category::all();
        $pro_data = Product::all();
        if (Auth::check()) {
            # code...
            $availableCart = Cart::where(['user_id' => Auth::id()])->first();
            // dd($cart);
            if (!empty($availableCart)) {
                $cartItemsCount = $availableCart->Products()->count();
            } else {
                $cartItemsCount = 0;
            }
        } else {
            $cartItemsCount = 0;
        }

        return view('user.panel.aboutUS', ['cartItemsCount' => $cartItemsCount]);
    }
    public function show1($id)
    {
        $product = Product::find($id);

        return \response()->json($product);
    }
    public function showCartItems($id)
    {
        $cart = Cart::where('user_id', $id)->get();

        return \response()->json($cart);
    }
    public function productsListOfCategory($id)
    {
        if (Auth::check()) {
            $availableCart = Cart::where(['user_id' => Auth::id()])->first();
            // dd($cart);
            if (!empty($availableCart)) {
                $cartItemsCount = $availableCart->Products()->count();
            } else {
                $cartItemsCount = 0;
            }
        } else {
            $cartItemsCount = 0;
        }
        $listOfProducts = Product::where('category_id', $id)->get();
        $category_lists = Category::all('id', 'name', 'parent_id');
        return
            view('user.panel.categoryPage', ['cartItemsCount' => $cartItemsCount, 'listOfProducts' => $listOfProducts, 'category_data' => $category_lists]);
    }
}
