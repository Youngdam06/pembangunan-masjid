<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    public function index()
    {
        return view('sesi.index');
    }

    public function post(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.requred' => 'email wajib diisi',
            'password.requred' => 'password wajib diisi',
        ]);

        $info = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($info)) {
            return redirect('keuangans.dashboard');
        } else {
            return redirect('sesi.index');
        }
    }
}
