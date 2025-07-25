<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserInfo;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('dashboard.dashboard');
        // }

        // return back()->withErrors([
        //     'email' => 'Invalid credentials.',
        // ])->withInput();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // ✅ Return JSON if it's an AJAX request
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'redirect_url' => route('dashboard.dashboard'),
                ]);
            }

            // fallback for non-AJAX
            return redirect()->route('dashboard.dashboard');
        }

        // return JSON for AJAX
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials.',
            ], 401);
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        // if (Auth::check()) {

        //     return view('dashboard');
        // }
        return view('dashboard.dashboard');
        //return redirect("login")->withSuccess('Opps! You do not have access');
    }
}
