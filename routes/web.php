<?php
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['auth'=>'middleware'],function(){
    Route::resource('categories', 'CategoryController');
    Route::get('/admin', [AdminController::class,'index']);
    Route::get('/logout', [AdminController::class,'logout']);
    Route::get('/login', [AdminController::class,'login']);
    Route::get('/addCategory', [App\Http\Controllers\CategoryController::class,'index']);
    Route::post('/addCategory', [CategoryController::class,'store']);
    Route::get('/showCategory', [CategoryController::class,'showCategory']);
    Route::get('/deletecategory/{id}',[CategoryController::class,'deletecategory']);
    Route::get('/editcategory/{id}',[CategoryController::class,'editcategory']);
    Route::post('/posteditcategory/{id}',[CategoryController::class,'posteditcategory']);
    
    //Products routes

Route::get('/addProduct', [ProductController::class,'addproduct']);
Route::post('/storeproduct', [ProductController::class,'storeproduct']);
Route::get('/showCategoryList', [ProductController::class,'showCategoryList']);
Route::post('/displayProductsFromCategory', [ProductController::class,'displayProductsFromCategory']);
Route::get('/getEditProductPage/{id}', [ProductController::class,'getEditProductPage']);
Route::post('/posteditpro/{id}', [ProductController::class,'posteditpro']);
Route::get('/deleteproduct/{id}',[ProductController::class,'deleteproduct']);
});

//cart routes

Route::get('/shop', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/addToCart', [CartController::class, 'addToCart']);
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');






Auth::routes();


// User Routes

Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/products/{id}', [HomeController::class, 'show1'])->name('products.show');
// Route::get('/showCartItems/{id}', [HomeController::class, 'showCartItems'])->name('cartItems.show');
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/blog1', [HomeController::class, 'blog1']);
Route::get('/blog2', [HomeController::class, 'blog2']);
Route::get('/blog3', [HomeController::class, 'blog3']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
