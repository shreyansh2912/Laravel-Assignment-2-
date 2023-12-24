<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return "Hello";
    }
    public function employee(){
        $employees = employee::all();
        return view('employee',['employees'=>$employees]);
    }
    public function insert(){
        return view('add_employee');
    }
    public function update_empl(){
        return view('update_employee');
    }
}
