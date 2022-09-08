<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'email' => 'required|email:dns|unique:users',
        'name' => 'required|unique:users',
        'password' => 'required|min:8|max:255',
    ]);

    $data['password'] = bcrypt($data['password']);

    User::create($data);

    return redirect('/register');

    }
}
