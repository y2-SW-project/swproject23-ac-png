<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest('updated_at')->paginate(12);
        // dd($products);

        // Returns to the page with all the products.
        return view('user.products.index')->with('products', $products);
    }
    /**
     * Display the specified resource.
     */
    public function show($uuid)
    {

        // If the id of the user does not match the note's user_id, returns a error screen.
        if (!Auth::id()) {
            return abort(403);
        }

        // Finds an product by uuid.
        $product = Product::where('uuid', $uuid)->firstOrFail();

        // Returns to the page with all the products.
        return view('user.products.show')->with('product', $product);
    }
}
