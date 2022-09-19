<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Mitra;
use Illuminate\Support\Facades\Auth;

class MitlogController extends Controller
{
    public function index()
    {
        return view('login.mitlog');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $mitra = Mitra::whereEmail($request->email)->first();

        if ($mitra) {

            if (Hash::check($request->password, $mitra->password)) {

                Auth::login($mitra);

                return redirect('/mitra/dashboard');
            }

            return redirect('/mitlog')->withErrors('loginError');

        }

        // $credentials = $request->only('email', 'password');
        // if (Auth::guard('mitra')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect()->('mitra.index')
        //                 ->withSuccess('Signed in');
        // }

    }

    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
