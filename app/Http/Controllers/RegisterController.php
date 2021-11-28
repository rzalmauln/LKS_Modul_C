<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:4|max:255',
            'alamat' => 'required',
            'noHp' => 'required|numeric'
        ]);
        // $validatedData['passowrd'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successfully');

        return redirect('/login')->with('success', 'Registration successfully');
    }
}
