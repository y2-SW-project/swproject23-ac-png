<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Sets the user's home directory.
        $user = Auth::user();
        $home = 'home';

        // Redirect to the user's (based on their role) home page.
        if ($user->hasRole('admin')) {
            $home = 'admin.products.index';
        } else if ($user->hasRole('user')) {
            $home = 'user.products.index';
        }
        return redirect()->route($home);
    }
}
