<?php

use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\Test3Controller;
use App\Http\Controllers\Test4Controller;
use App\Http\Controllers\Test5Controller;
use App\Http\Controllers\TestsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Tests overview
Route::get('tests/{type}', [TestsController::class, 'index'])->name('tests');

// Test 1
Route::get('test-1', [Test1Controller::class, 'index'])->name('test-1');
Route::post('test-1', [Test1Controller::class, 'submit'])->name('test-1.submit');

// Test 3
Route::get('test-3', [Test3Controller::class, 'index'])->name('test-3');

// Test 4
Route::get('test-4', [Test4Controller::class, 'index'])->name('test-4');
Route::post('test-4/login', [Test4Controller::class, 'login'])->name('test-4.login');

// Test 5
Route::get('test-5', [Test5Controller::class, 'index'])->name('test-5');
Route::post('test-5', [Test5Controller::class, 'submit'])->name('test-5.submit');