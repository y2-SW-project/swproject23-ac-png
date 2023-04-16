<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Authorizes admin role.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        $diets = Diet::latest('updated_at')->paginate(5);
        // dd($diets);

        // Returns to the page with all the diets.
        return view('admin.diets.index')->with('diets', $diets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Authorizes admin role.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        // Returns to the page with all the diets.
        return view('admin.diets.create');
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
        Diet::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'description' => $request->description
        ]);

        // Shows the form for creating a new diets (with success alert).
        return to_route('admin.diets.index')->with('success', 'Diet created successfully');
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

        // Finds an diet by uuid.
        $diet = Diet::where('uuid', $uuid)->firstOrFail();

        // Returns to the page with all the diets.
        return view('admin.diets.show')->with('diet', $diet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diet $diet)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // dd($diet->name);

        // $diets = Diet::all();

        // return view('admin.diets.edit')->with('diet', $diet);
        return view('admin.diets.edit')->with('diet', $diet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diet $diet)
    {
        // Authorizes admin role.
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Updates the diet's information.
        $diet->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        // Returns to the single diet page (with the updated data).
        return to_route('admin.diets.show', $diet->uuid)->with('success', 'Diet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diet $diet)
    {
        // Authorizes admin role.
        $admin = Auth::user();
        $admin->authorizeRoles('admin');

        // Deletes the diet.
        $diet->products()->detach();
        $diet->delete();

        // Returns to the page with the diets (without the deleted note).
        return to_route('admin.diets.index')->with('success', 'Diet deleted successfully');
    }
}
