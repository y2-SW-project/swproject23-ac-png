<?php

namespace App\Http\Controllers\Admin;

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
        // Authorizes admin role.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        $products = Product::latest('updated_at')->paginate(12);
        // dd($products);

        // Returns to the page with all the products.
        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($uuid)
    {
        // Authorizes admin role.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        // If the id of the admin does not match the note's admin_id, returns a error screen.
        if (!Auth::id()) {
            return abort(403);
        }

        // Finds an product by uuid.
        $product = Product::where('uuid', $uuid)->firstOrFail();

        // Returns to the page with all the products.
        return view('admin.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
