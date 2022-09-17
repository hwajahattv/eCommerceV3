<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Image;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addproduct(){
        $category_lists=Category::all('id','name','parent_id');
        return view ('admin.products.addproduct',['category_data'=>$category_lists]);
    }
    public function storeproduct (Request $request){
        $data = $request->all();
    
        //model call
    
        $pro= new Product;
    
        $pro->title = $data["productTitle"];
        $pro->product_slug = $data["productSlug"];
        $pro->description = $data["productDescription"];
        $pro->SKU = $data["productSKU"];
        $pro->price = $data["productPrice"];
        $pro->size = $data["productSize"];
        $pro->stock = $data["productStock"];
        $pro->enabled = $data["enabled"];
        $pro->category_id = $data["sel_category"];
       
        //image validation
    
        if($request->hasfile('productImageName')){
           $img_tmp = $request->file('productImageName');
    
           $extension = $img_tmp->getClientOriginalExtension();
    
           $filename = uniqid().'.'.$extension;
    
           $img_path = 'img/uploads/product/'.$filename;
    
           Image::make($img_tmp)->resize(400,400)->save($img_path);
           $pro->product_image = $filename;
        }
    
        $pro->save();
        return redirect()->back();
    
       }
       public function showCategoryList(){
        $category_lists=Category::all('id','name','parent_id');
        return view ('admin.products.showcat',['category_data'=>$category_lists]);
       }
       
       public function displayProductsFromCategory(Request $request){
        $data = $request->all();
        $category_lists=Category::all('id','name','parent_id');
        $alldata = Product::with('Category')->where(['Category_id'=>$data['sel_category']])->get();
      // dd($alldata);
  
        return view ('admin.products.showProductsFromCategory', ['pro_list'=>$alldata, 'category_data'=>$category_lists]);
       }
       public function getEditProductPage($id_receive){
        $alldata = Product::where(['id'=>$id_receive])->first();
        $category_lists=Category::all('id','name','parent_id');
        // dd($alldata);
        return view ('admin.products.editproducts',['data_send'=>$alldata, 'category_data'=>$category_lists]);
     }
     public function posteditpro(Request $request, $id_received){
      $data = $request->all();
  
      //model call
  
      $pro= new Product;
    
      $pro->title = $data["pname"];
      $pro->product_slug = $data["pslug"];
      $pro->description = $data["pdescription"];
      $pro->price = $data["pprice"];
      $pro->stock = $data["pstock"];
      $pro->SKU = $data["pSKU"];
      $pro->enabled = $data["enabled"];
      $pro->Category_id = $data["sel_category"];
     
      //image validation
  
      if($request->hasfile('pimage')){
         $img_tmp = $request->file('pimage');
  
         $extension = $img_tmp->getClientOriginalExtension();
  
         $filename = uniqid().'.'.$extension;
  
         $img_path = 'img/uploads/product/'.$filename;
  
         Image::make($img_tmp)->resize(400,400)->save($img_path);
         $pro->product_image = $filename;
      }
      else
      {
         $filename=$data['current_image'];
      }
      Product::where(['id'=>$id_received])->update(['title'=>$data['pname'],'product_slug'=>$data['pslug'],'description'=>$data['pdescription'],'price'=>$data['pprice'],'stock'=>$data['pstock'],'SKU'=>$data['pSKU'],'enabled'=>$data['enabled'],'product_image'=>$filename,'category_id'=>$data['sel_category']]);
      return redirect('/showCategoryList');
     }

     public function deleteproduct($id){

      $alldata = Product::all();

      Product::where(['id'=>$id])->delete();
      return redirect('/showCategoryList');
     }
     public function productList()
    {
        $products = Product::all();

        return view('user.panel.shop', compact('products'));
    }


}
