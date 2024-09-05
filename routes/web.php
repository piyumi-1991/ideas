<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\proController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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


// more organized way to load/call view

Route::get('/', [DashboardController::class, 'index']);

Route::get('/terms', function(){
    return view('terms');
});





Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/addUser', [UserController::class, 'index']);

Route::get('/pro', [proController::class, 'pro']);





/*
old way to load view/ call view


Route::get('/', function () {
    return view('welcome');
});
Route::get('/feed', function () {
    return view('feed');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/user', function () {
    return view('users.user');
});
*/