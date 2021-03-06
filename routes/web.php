<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


Route::get('/',[HomeController::class,'home']);
Route::get('/history',[HomeController::class,'history']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/gallery',[HomeController::class,'gallery']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/downloads',[HomeController::class,'downloads']);
Route::post('/saveUserMessage',[HomeController::class,'saveUserMessage']);
Route::get('/login',[LoginController::class,'login']);
Route::get('/doLogin',[LoginController::class,'doLogin']);
Route::get('/register',[RegisterController::class,'register']);
Route::post('/doRegister',[RegisterController::class,'doRegister']);
Route::get('/sample',[HomeController::class,'sample']);