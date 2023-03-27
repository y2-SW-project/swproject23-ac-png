<?php

namespace App\Http\Controllers\User;

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
        $manufacturers = Manufacturer::latest('updated_at')->paginate(5);
        // dd($manufacturers);

        // Returns to the page with all the manufacturers.
        return view('user.manufacturers.index')->with('manufacturers', $manufacturers);
    }
    /**
     * Display the specified resource.
     */
    public function show($uuid)
    {
        // If the id of the admin does not match the note's admin_id, returns a error screen.
        if (!Auth::id()) {
            return abort(403);
        }

        // Finds an manufacturer by uuid.
        $manufacturer = Manufacturer::where('uuid', $uuid)->firstOrFail();

        // Returns to the page with all the manufacturers.
        return view('user.manufacturers.show')->with('manufacturer', $manufacturer);
    }
}
