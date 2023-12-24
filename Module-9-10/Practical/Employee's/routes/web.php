<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Route::get('/register',[AuthController::class ,'index']);

Route::get('/employee',[AuthController::class,'employee']);
// Route::post('/employee',[EmployeeController::class,'index']);

Route::get('/employee_add',[AuthController::class,'insert']);
Route::post('/employee_add',[EmployeeController::class,'store']);

Route::get('/update_employee/{id}',[EmployeeController::class,'edit']);
Route::put('/update_employee/{id}',[EmployeeController::class,'update']);

Route::get('/delete_employee/{id}',[EmployeeController::class,'destroy']);
// Route::get('/')