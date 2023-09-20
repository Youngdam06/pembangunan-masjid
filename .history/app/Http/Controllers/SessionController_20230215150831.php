<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function index()
    {
        return view('index');
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
    }
}
