<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ListController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurrencyController;
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

Route::post('login', [ApiController::class, 'authenticate']);
Route::post('register', [AuthController::class, 'register']);
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/transactions/{id}', [ListController::class,'userTransactions']);
});

Route::get('/currencies', [CurrencyController::class,'show']);
Route::post('/create-acc', [ListController::class,'create']);
Route::get('/transactions', [ListController::class,'transactions']);
Route::middleware('auth:sanctum')->get('/user', function (Account $account) {
    return $account;
});
//listing
Route::get('/list', [ListController::class,'index']);

//get
Route::get('/list/{id}', [ListController::class,'info']);






Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('get_user', [ApiController::class, 'get_user']);
    //create

//update
Route::put('/update-acc/{id}', [ListController::class,'update']);


//delete
Route::delete('/delete-acc/{id}', [ListController::class,'delete']);
});
