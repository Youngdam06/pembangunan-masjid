<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //
    public function indexlogin()
    {
        return view('sesi.index');
    }

    public function indexregister()
    {
        return view('sesi.register');
    }
    // proses login

    public function postlogin(Request $request)
    {
        Session::flash('success', 'Anda berhasil Sign in!');
        Session::flash('loginError', 'Gagal Sign in, masukkan data dengan benar!');
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $info = [
            'email' => $request->email,
            'password' => $request->password,


        ];

        if (Auth::attempt($info)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
    }
    // proses register
    public function store(Request $request)
    {
        Session::flash('sukses', 'Anda berhasil Register!');
        Session::flash('gagalreg', 'Gagal Register, masukkan data dengan benar!');
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|max:90|unique:users',
            'password' => 'required|min:2|max:225',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('login');
    }

    // logout

    public function postlogout()
    {
        //laptop kocak nyetrum bae.
        // Charles Benson
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
