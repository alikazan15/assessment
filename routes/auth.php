<?php

use App\Http\Controllers\Test4Controller;
use Illuminate\Support\Facades\Route;


// Test 4
Route::get('test-4/my-account', [Test4Controller::class, 'myAccount'])->name('test-4.my-account');