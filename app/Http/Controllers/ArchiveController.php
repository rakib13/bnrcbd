<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
     public function index(Request $request)
    {
        if (Auth::check()) {
            // Optional: create a custom session variable
            session(['archive' => true]);

            // Redirect to your actual dashboard route name
            return redirect()->route('dashboard.dashboard');
        }

        session()->forget('archive');

        return redirect('/login');
    }
}
