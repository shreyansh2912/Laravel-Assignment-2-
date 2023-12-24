<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/register',[Authcontroller::class,'register']);
Route::post('/register',[Authcontroller::class,'store']);

Route::get('/login',[Authcontroller::class,'login']);
Route::post('/login',[Authcontroller::class,'validate_login']);

Route::get('/home',[Authcontroller::class,'index']);

Route::get('/About us',[Authcontroller::class,'About']);

Route::get('/contact us',[Authcontroller::class,'contact']);

Route::get('/gallery',[Authcontroller::class,'gallery']);



