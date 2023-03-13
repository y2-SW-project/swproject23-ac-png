<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function manufacturer()
    {
        // One-to-many relationship between Manufacturer and Product.
        return $this->belongsTo(Manufacturer::class);
    }

    public function diets()
    {
        // Many-to-many relationship between Diet and Product.
        return $this->belongsToMany('App\Models\Diet', 'diet_product');
    }
}
