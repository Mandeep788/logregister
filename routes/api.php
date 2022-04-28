<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetController;
/*

|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//public Routes
Route::post('/registers',[UserController::class,'register']);
Route::post('/loginusr',[UserController::class,'login']);
Route::post('/sent_reset_password_mail',[PasswordResetController::class,'sent_reset_password_mail']);


//protected
Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout',[UserController::class,'logout']);
    Route::get('/logged',[UserController::class,'logged_user']);
    Route::post('/changepass',[UserController::class,'change_password']);

});