<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Mitra;

class MitregController extends Controller
{
	
    public function index(Request $request)
    {
        return view('login.mitreg');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'email' => 'required|email:dns|unique:users',
        'name' => 'required|unique:users',
        'password' => 'required|min:8|max:255',
    ]);

    $data['password'] = bcrypt($data['password']);

    Mitra::create($data);

    return redirect('/mitreg');

    }
}
