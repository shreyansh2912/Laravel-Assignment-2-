<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($_REQUEST);
        $employee = new employee;
        $employee->name = $request->name;
        $employee->email_id = $request->email;
        // $employee->phone = $request->phone;
        $employee->country = $request->country;
        $employee->age = $request->age;  
        $employee->salary = $request->salary;
        $employee->save();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        return redirect('/employee'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // @dd($id);
        $employee = employee::find($id);
        return view('update_employee',['employee'=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = employee::find($id);
        $employee->name = $request->name;
        $employee->email_id = $request->email;
        // $employee->phone = $request->phone;
        $employee->country = $request->country;
        $employee->age = $request->age;  
        $employee->salary = $request->salary;
        $employee->save();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        employee::destroy($id);
        return redirect('/employee');
    }
}
