<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Models\Diet;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        // Authorizes admin roles.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');


        // Gets all the Manufacturers.
        $manufacturers = Manufacturer::all();
        // Gets all the Diets.
        $diets = Diet::all();

        // Shows the form for creating a new products (with the manufacturers and diets).
        return view('admin.products.create')->with('manufacturers', $manufacturers)->with('diets', $diets);

        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Authorizes admin roles.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        // Creates a new product.
        $product = Product::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'manufacturer_id' => $request->manufacturer_id,
            'image' => 'file|image'
        ]);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // the filename needs to be unique, I use name and add the date to guarantee a unique filename, ISBN would be better here.
        $filename = date('Y-m-d-His') . '_' . $request->input('name') . '.' . $extension;

        // store the file $image in /public/images, and name it $filename
        $path = $image->storeAs('public/images', $filename);

        $product->diets()->attach($request->diets);

        // Shows the page for all the products.
        return to_route('admin.products.index');
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
    public function edit(Product $product)
    {
        // Authorizes admin role.
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // dd($product->hospital->id);

        // Getting the manufacturers and diets.
        $manufacturers = Manufacturer::all();
        $diets = Diet::all();

        // return view('admin.products.edit')->with('product', $product);
        return view('admin.products.edit', [
            'product' => $product,
            'manufacturers' => $manufacturers,
            'diets' => $diets
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Authorizes admin role.
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Updates the product's information.
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'manufacturer_id' => $request->manufacturer_id
        ]);

        // Returns to the single product page (with the updated data).
        return to_route('admin.products.show', $product->uuid)->with('success', 'Diet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Authorizes admin role.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        // Deletes the product.
        $product->diets()->detach();
        $product->delete();

        // Returns to the page with the pro$products (without the deleted note).
        return to_route('admin.products.index')->with('success', 'Product deleted successfully');
    }
}
