<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function Manufacturer()
    {
        // One-to-many relationship between Manufacturer and Product.
        return $this->belongsTo(Manufacturer::class);
    }
}
