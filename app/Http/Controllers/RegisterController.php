<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',   
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'

        ]);
        //password encrypt
        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success', 'Registration successfull!! pleas login');

        return redirect('/login');
    }
}
