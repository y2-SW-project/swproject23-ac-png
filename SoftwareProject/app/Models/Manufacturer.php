<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function products()
    {
        // One-to-many relationship between Manufacturer and Product.
        return $this->hasMany(Product::class);
    }
}
