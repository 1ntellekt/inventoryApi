<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/item',[ItemController::class,'show']);

Route::get('/classrooms', [ClassRoomController::class,'index']);
Route::post('/classrooms', [ClassRoomController::class,'store']);
Route::get('/classroom', [ClassRoomController::class,'show']);

Route::get('/categories', [CategoryController::class,'index']);
Route::post('/categories', [CategoryController::class,'store']);
Route::get('/categories/{id}', [CategoryController::class,'show']);


