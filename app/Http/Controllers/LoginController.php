<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index()
    {
        return view('signin.index', [
            'title' => 'Sign in'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($request->rememberme) {
                $minute = 2628000;
                $response = new Response(redirect('/products'));
                $response->withCookie(cookie('email', $request->email, $minute));
                return $response;
            }
            return redirect()->intended('/products');
        }


        return back()->with('loginError', 'Login failed, wrong email or password');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/signin');
    }
}