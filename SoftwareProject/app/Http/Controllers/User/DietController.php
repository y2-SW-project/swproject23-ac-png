<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Diet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diets = Diet::latest('updated_at')->paginate(5);
        // dd($diets);

        // Returns to the page with all the diets.
        return view('user.diets.index')->with('diets', $diets);
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

        // Finds an diet by uuid.
        $diet = Diet::where('uuid', $uuid)->firstOrFail();

        // Returns to the page with all the diets.
        return view('user.diets.show')->with('diet', $diet);
    }
}
