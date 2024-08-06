<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterFormRequest;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\String\b;

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

    public function register(UserRegisterFormRequest $request)
    {


      $manager = Manager::query()->create([

            'fullname' => $request->fullname,
            'password'=> bcrypt($request->password),
            'national_code'=>$request->national_code,
            'mobile'=>$request->mobile,
            'team_name'=>$request->team_name,

        ]);

      Auth::login($manager);


       return redirect()->route('user.player.index');

    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'mobile' => ['required','digits:11'],
            'password' => ['required','min:6'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('user/player');
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
