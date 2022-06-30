<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Test5Controller extends Controller
{
    public function index()
    {
        return view('pages.test-5');
    }

    public function submit(Request $request)
    {

        $age=\App\Models\Person::create();
        $age=\App\Events\Person::dispatch($age);
        $gender=\App\Observers\GenderObserver::created($person);
       

        

        $user = Person::updateOrCreate(
            ['email' => $request->input('email')],
            [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'age'=>$age,
                'gender'=>$gender
            ]
        );

        // Good luck

        dd('done');
    }
}
