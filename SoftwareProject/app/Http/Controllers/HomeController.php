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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manufacturerIndex()
    {
        // Sets the user's home directory.
        $user = Auth::user();
        $home = 'home';

        // Redirect to the user's (based on their role) home page.
        if ($user->hasRole('admin')) {
            $home = 'admin.manufacturers.index';
        } else if ($user->hasRole('user')) {
            $home = 'user.manufacturers.index';
        }
        return redirect()->route($home);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dietIndex()
    {
        // Sets the user's home directory.
        $user = Auth::user();
        $home = 'home';

        // Redirect to the user's (based on their role) home page.
        if ($user->hasRole('admin')) {
            $home = 'admin.diets.index';
        } else if ($user->hasRole('user')) {
            $home = 'user.diets.index';
        }
        return redirect()->route($home);
    }

    public function basketIndex()
    {
        // Sets the user's home directory.
        $user = Auth::user();
        $home = 'home';

        // Redirect to the user's (based on their role) home page.
        if ($user->hasRole('admin')) {
            $home = 'admin.baskets.index';
        } else if ($user->hasRole('user')) {
            $home = 'user.baskets.index';
        }
        return redirect()->route($home);
    }
}
