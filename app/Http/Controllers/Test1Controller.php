<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Test1Controller extends Controller
{
    public function index()
    {
        return view('pages.test-1');
    }

    public function submit(Request $request)
    {

        // Refactor the validation

        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'company' => ['required'],
            'phone' => 'required|digits:10',
        ]);

      

        $email = $request->get('email');

        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors(['email' => 'Email is not valid'])->withInput();
        }

        

        $check_if_user_exists = User::where('email', $email)->first();

        if( $check_if_user_exists )
            return back()->withErrors(['email' => 'Email already exists']);

       
       
        return redirect()->back()->withErrors("Validation complete!");

    }
}
