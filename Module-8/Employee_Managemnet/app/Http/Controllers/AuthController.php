<?php

namespace App\Http\Controllers;

use App\Models\employeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employee_list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Add()
    {
       return view('employee_add');
    }
    public function updt(Request $request)
    {
        $data = DB::table('users')->where('id','=',$request['id'])->get();
       return view('employee_update',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([

          'name' => $request['name'],
          'email' => $request['email'],
          'phone' => $request['phone'],
          'branch'=> $request['branch']
            
        ]);
        return redirect('employee_list');
    }

    /**
     * Display the specified resource.
     */
    public function show(employeeModel $rc)
    {
            $data = DB::table('users')->get();

            return view('employee_list',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employeeModel $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employeeModel $rc)
    {
        DB::table('users')->where('id','=',$request['id'])
        ->update( array(
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'branch'=> $request['branch']
        ));

        return redirect('employee_list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request)
    {
        DB::table('users')->WHERE('id','=',$request['id'],)->delete();
        return redirect('employee_list');
    }
}
