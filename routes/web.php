<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

#LOGIN
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class,'process'])->name('process');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['login:1']], function () {
        Route::resource('dashboard', DashController::class);

        #USERS
        Route::get('user', [UserController::class, 'index']);
        Route::get('users/list', [UserController::class, 'getUsers']);
    });
});
