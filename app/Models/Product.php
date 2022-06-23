<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

class Product extends Model
{
    
    public function Category(){
        
        return $this->belongsTo (Category::class);
}
}
