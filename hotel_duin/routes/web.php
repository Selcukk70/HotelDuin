<?php

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





Route::get('/', [App\Http\Controllers\FrontPageController::class, 'index'])->name('home');

Route::get('/kamers', [App\Http\Controllers\FrontPageController::class, 'checkrooms']);

Route::get('/detail', [App\Http\Controllers\FrontPageController::class, 'detail']);

Route::get('/contact', [App\Http\Controllers\FrontPageController::class, 'contact']);

Route::get('/login', function () {
    return view('/auth/login'); 
}); //Login

Auth::routes(); //Login

Auth::routes(); //Login

Route::get('/user_dashboard', [App\Http\Controllers\HomeController::class, 'user_index'])->middleware('role:0'); //Dashboard

Route::get('/change-information', [App\Http\Controllers\UserController::class, 'index'])->middleware('role:0'); //UserInfo

Route::post('/update-information', [App\Http\Controllers\UserController::class, 'update'])->middleware('role:0'); //UserInfo

Route::get('/admin_dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role:1'); //Dashboard

Route::get('/rooms', [App\Http\Controllers\kamerController::class, 'index'])->middleware('role:1'); //Kamer

Route::get('/product-toevoegen', [App\Http\Controllers\kamerController::class, 'addroom'])->middleware('role:1'); //Kamer

Route::post('upload_data', [App\Http\Controllers\kamerController::class, 'store'])->middleware('role:1'); //Kamer

Route::get('wijzig-kamer', [App\Http\Controllers\kamerController::class, 'wijzig_kamer'])->middleware('role:1'); //Kamer

Route::post('update_product', [App\Http\Controllers\kamerController::class, 'update'])->middleware('role:1'); //Kamer

Route::get('verwijder-product', [App\Http\Controllers\kamerController::class, 'delete'])->middleware('role:1'); //Kamer

Route::get('change-password', [App\Http\Controllers\ChangePasswordController::class, 'index']); //Password

Route::get('change-password-user', [App\Http\Controllers\ChangePasswordController::class, 'index_user']); //PasswordUser

Route::post('change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password'); //Password






