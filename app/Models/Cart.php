<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function Products(){
        
        return $this->belongsToMany(Product::class);
    }
    public function User(){
        
        return $this->belongsTo (User::class);
    }

}
