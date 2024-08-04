<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {

        return view('auth.user.login');

    }

    public function showRegister()
    {

        return view('auth.user.register');

    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'mobile' => ['required','digits:11'],
            'password' => ['required','min:6'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('user/dashboard');
        }

        return back()->withErrors([
            'error' => 'اطلاعات وارد شده اشتباه می باشد',
        ])->onlyInput('mobile');

    }

    public function logout()
    {

        Auth::logout();

        return redirect()->intended('/');

    }
}
