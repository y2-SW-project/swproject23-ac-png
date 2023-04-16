<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Authorizes admin role.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        $manufacturers = Manufacturer::latest('updated_at')->paginate(5);
        // dd($manufacturers);

        // Returns to the page with all the manufacturers.
        return view('admin.manufacturers.index')->with('manufacturers', $manufacturers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Authorizes admin role.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        // Returns to the page with all the manufacturers.
        return view('admin.manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Authorizes admin roles.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        // Create a new diet.
        Manufacturer::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->name
        ]);

        // Shows the form for creating a new animals (with success alert).
        return to_route('admin.manufacturers.index')->with('success', 'Diet created successfully');
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

        // Finds an manufacturer by uuid.
        $manufacturer = Manufacturer::where('uuid', $uuid)->firstOrFail();

        $products = Product::where('manufacturer_id', $uuid)->paginate(4);

        // Returns to the page with all the manufacturers.
        return view('admin.manufacturers.show')->with('manufacturer', $manufacturer)->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manufacturer $manufacturer)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.manufacturers.edit')->with('manufacturer', $manufacturer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        // Authorizes admin roles.
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Updates the manufacturer's information.
        $manufacturer->update([
            'name' => $request->name,
            'address' => $request->address,
            'address' => $request->email,
            'address' => $request->phone_number
        ]);

        // Returns to the single manufacturer page (with the updated data).
        return to_route('admin.manufacturers.show', $manufacturer->uuid)->with('success', 'Manufacturer updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manufacturer $manufacturer)
    {
        // Authorizes admin roles.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        // Deletes the manufacturer.
        $new_manufacturer = Manufacturer::where('id', '!=', $manufacturer->id)->first();
        if ($new_manufacturer) {
            $products = $manufacturer->products;
            foreach ($products as $product) {
                $product->manufacturer_id = $new_manufacturer->id;
                $product->save();
            };
            $manufacturer->delete();
            // Returns to the page with the manufacturers (without the deleted product).
            return to_route('admin.manufacturers.index')->with('success', 'Hospital deleted successfully');
        } else {
            // Returns to the page with the manufacturers (without the deleted product).
            return to_route('admin.manufacturers.index')->with('failure', 'This manufacturer can not be deleted!');
        }
    }
}
