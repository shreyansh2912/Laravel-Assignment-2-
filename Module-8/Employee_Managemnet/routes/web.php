<?php

use App\Http\Controllers\AuthController;
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
    return view('employee_list');
});

Route::get('/employee_list',[AuthController::class,'show']);

Route::get('/all_employee',[AuthController::class,'index']);

Route::get('/employee_add',[AuthController::class,'add']);
Route::post('/employee_add',[AuthController::class,'store']);

Route::get('/employee_update/{id}',[AuthController::class,'updt']);
Route::post('/employee_update/{id}',[AuthController::class,'update']);

Route::get('/employee_delete/{id}',[AuthController::class,'destroy']);