<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function sizes(){
        return $this->hasMany(Size::class, 'name');
    }

    public function colors(){
        return $this->hasMany(Color::class, 'name');
    }
}
