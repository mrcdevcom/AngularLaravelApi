<?php

use App\UserDomicilio;
use App\User;
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


Route::get('user_domicilio', function () {
    return UserDomicilio::all();
});

Route::get('user_domicilio/{user_id}', function ($user_id) {
    $ud = UserDomicilio::where('user_id', $user_id)->get();
    $u = User::find($user_id)->get();
    return [$ud, $u];
});
