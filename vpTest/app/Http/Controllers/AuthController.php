<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validatedData['username'] === env('TEST_USERNAME') && $validatedData['password'] === env('TEST_PASSWORD')) {
            session(['logged_in' => true]);
            return redirect('/');
        } else {
            return back()->withErrors([
                'login' => 'Invalid username or password'
            ]);
        }
    }

    public function logoutAction(Request $request)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/logout');
    }
}