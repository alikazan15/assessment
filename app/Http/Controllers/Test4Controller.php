<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Test4Controller extends Controller
{

    public function index()
    {
        return view('pages.test-4.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, true)) {
            return redirect()->intended('test-4/my-account');
        }

        return back()->with('error', 'Incorrect email or password.');
    }

    public function myAccount()
    {
        if(auth()->check())
        {
            return view('pages.test-4.my-account', [
                'user' => auth()->user()
            ]);
        }
        else
        {
            return view('pages.test-4.login');

        }

       

    }

}
