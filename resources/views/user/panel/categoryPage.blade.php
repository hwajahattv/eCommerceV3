@extends('user.parent.master')

@section('content')
<div class="alert alert-success productData">
      <h1 class="text-center display-3">List of All Products from Category</h1>
      <table class="table table-bordered">
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Price</th>
              <th>Stock</th>
              <th>SKU</th>
              <th>Description</th>
              <th>Category Name</th>
              <th>Thumbnail</th>
              <th>Actions</th>
          </tr>

          @foreach ($listOfProducts as $abc)
          <tr >
              <td value="{{$abc->id}}" class="productID">{{ $abc->id }}</td>
              <td>{{ $abc->title}}</td>
              <td>{{ $abc->product_slug }}</td>
              <td>{{ $abc->price }}</td>
              <td>{{ $abc->stock }}</td>
              <td>{{ $abc->SKU }}</td>
              <td>{{ $abc->description }}</td>
              <td>{{ $abc->Category->name }} 
                 @foreach($category_data as $parentCategory)
                            @if($parentCategory->id==$abc->Category->parent_id)
                                ({{$parentCategory->name}})
                            @endif
                        @endforeach
              </td>
              <td><img style="width:110px; height:110px;" src="{{ asset('img/uploads/product/'.$abc->product_image) }}" /></td>
              <td><button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 addToCartBtn" >
                        Add to cart
                </button></td>
          </tr>              
          @endforeach
</table>
</div>

@endsection