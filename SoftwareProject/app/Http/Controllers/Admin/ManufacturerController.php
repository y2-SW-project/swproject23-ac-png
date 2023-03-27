<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

        // Finds an manufacturer by uuid.
        $manufacturer = Manufacturer::where('uuid', $uuid)->firstOrFail();

        // Returns to the page with all the manufacturers.
        return view('admin.manufacturers.show')->with('manufacturer', $manufacturer);
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
