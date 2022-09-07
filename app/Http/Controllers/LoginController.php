<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.login', [
            'tittle' => 'Login'
        ]);
    }

    public function authenticate(Request $request, $user)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::whereEmail($request->email)->first();

        if ($user) {

            if (Hash::check($request->password, $user->password)) {

                Auth::login($user);

                return redirect('/login');
            }

            return back()->withErrors([
                'email' => 'Email Or Password Is Wrong!'
            ]);

        }

    }

    public function Logout(Request $request)
    {
        // code...
    }
}
