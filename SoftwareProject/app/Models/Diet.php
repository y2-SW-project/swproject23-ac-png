<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function products()
    {
        // Many-to-many relationship between Diet and Product.
        return $this->belongsToMany('App\Models\Product', 'diet_product');
    }
}
