<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


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
    return view('first');
});
Route::get('/home',[JobController::class,'index']);
Route::post('/in',[JobController::class,'insert']);
Route::get("/del/{id}",[JobController::class,'destroy']);
Route::get('/edit/{id}',[JobController::class,'edit']);
Route::put('/{id}/update2',[JobController::class,'update']);