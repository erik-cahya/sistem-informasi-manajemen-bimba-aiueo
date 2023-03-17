<?php

use App\Http\Controllers\Auth\LoginController;
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


// Authentication

Route::get('/login', [LoginController::class, 'index']);

Route::get('/home', function () {
    // auth : guru & kepala_staff
    $data['auth'] = "kepala_staff";
    return view('home', $data);
})->name('dashboard');
