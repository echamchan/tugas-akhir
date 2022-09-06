<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    public function index()
    {
        return view('login.login', [
            'tittle' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::whereEmail($request->email)->first();

        if ($user) {

            if (Hash::check($request->password, $user->password)) {

                Auth::login($user);

                return redirect('/');
            }

            return back()->withErrors([
                'email' => 'Username Or Password Is Wrong!'
            ]);

        }

    }
}
