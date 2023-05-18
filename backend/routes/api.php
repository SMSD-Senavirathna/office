<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees',[App\Http\Controllers\EmployeeController::class,'index']);
//Route::get('/editemployee/{id}',[App\Http\Controllers\EmployeeController::class,'show']);
Route::post('/save',[App\Http\Controllers\EmployeeController::class,'save']);
Route::put('/update/{id}',[App\Http\Controllers\EmployeeController::class,'update']);
Route::delete('/delete/{id}',[App\Http\Controllers\EmployeeController::class,'delete']);