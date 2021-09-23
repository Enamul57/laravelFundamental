<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstApi;
use App\Http\Controllers\postApi;
use App\Http\Controllers\choiceController;
use App\Http\Controllers\userSeederController;
use App\Http\Controllers\myController;
use App\Http\Controllers\uploadController;
;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("login",[userSeederController::class,'index']);
Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::apiResource('/choice',choiceController::class);
    Route::post('/postdata',[postApi::class,'index']);
    Route::put('/update',[postApi::class,'update']);
    Route::delete('/delete',[postApi::class,'delete']);
    Route::get('/search/{name}',[postApi::class,'search']);
    Route::post('/save',[postApi::class,'validation']);

});
Route::get('/data',[firstApi::class,'index']);
Route::post('sign',[myController::class,'index']);
Route::post('upload',[uploadController::class,'index']);


