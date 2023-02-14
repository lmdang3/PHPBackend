<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === env('TEST_USERNAME') && $password === env('TEST_PASSWORD')) {
            $hello = "yes";
            // this is how you send in a prop to another component
            return view('dashboard', compact('hello'));
        } else {
            $hello = "no";
            // this is how you send in a prop to another component
            return view('dashboard', compact('hello'));
        }

      
        // return view('dashboard');
        // return view('dashboard', compact('username'));
    }
}
