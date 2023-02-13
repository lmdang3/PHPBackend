<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        Log::info("Username: $username, Password: $password");

        if ($username === env('TEST_USERNAME') && $password === env('TEST_PASSWORD')) {
            return redirect()->route('welcome');
        } else {
            return redirect()->back()->with('error', 'Incorrect username or password');
        }
    }
}