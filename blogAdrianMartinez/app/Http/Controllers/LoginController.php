<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(RegisterController $request)
    {
        $user = new User();
        $user->username = $request->get('username');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        Auth::login($user);

        return redirect()->route('users.acount');
    }

    public function loginForm()
    {
        return 'hola';
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credenciales = $request->only('username', 'password');

        if (Auth::guard('web')->attempt($credenciales))
        {
            $request->session()->regenerateToken();
            return redirect()->route('users.account');
        } else {
            $error = 'Error al acceder a la aplicación';
            return view ('auth.login', compact('error'));
        }
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
