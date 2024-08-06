<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {

        return view('auth.admin.login');

    }




    public function login(Request $request)
    {

        $credentials = $request->validate([
            'mobile' => ['required','digits:11'],
            'password' => ['required','min:6'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/manager');
        }
        return back()->withErrors([
            'error' => 'اطلاعات وارد شده اشتباه می باشد',
        ])->onlyInput('mobile');

    }

    public function logout()
    {

        Auth::guard('admin')->logout();

        return redirect()->intended('auth/admin/login');

    }

}
