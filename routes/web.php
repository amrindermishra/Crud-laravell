<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

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


Route::get('/fomeview',[UserController::class,'fomeView']);
Route::post('/createuser',[UserController::class,'dataSubmit']);
Route::get('/list',[UserController::class,'show']);
Route::get('/remove/{id}',[UserController::class,'userDel']);
Route::get('/edit/{id}',[UserController::class,'showData']);
Route::post('/edit',[UserController::class,'update']);
