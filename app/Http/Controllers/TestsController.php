<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index($type)
    {
        return view('pages.tests', [
            'type' => $type
        ]);
    }
}
