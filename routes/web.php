<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/registration-list', [AdminController::class, 'registration_list']);
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::post('/register', [MainController::class, 'submit_registration']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', function() {
    return view('register');
});

Route::get('/thanks', function() {
    return view('thanks');
})->name('thanks');

Route::post('/', [MainController::class, 'submit_registration']);

Route::get('/', function() {
    return view('register');
});
