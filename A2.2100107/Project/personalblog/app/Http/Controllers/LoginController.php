<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');

        // $request->validate([
        //     'email' => 'required|email:dns',
        //     'password' => 'required',
        // ]);

        // $user = User::whereEmail($request->email)->first();

        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);

        //         return redirect('/')->with('succes', 'You Are now logged in');
        //     }
        // }

        // throw ValidationException::withMessages([
        //     'email' => 'Your provide credentials does not match our records.',
        // ]);

        // $user = User::where('email', '=', $request->email)->first();

        // if ($user && $request->password == $user->password) {
        //     Auth::login($user);
        //     if (Auth::check()) {
        //         return "success";
        //     } else {
        //         return "not logged in";
        //     }
        // } else {
        //     return "Error";
        // }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
