<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function register()
    {
        return view("register");
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        return redirect('/login');
    }
    public function validate_login(Request $request)
    {
        // print_r($_REQUEST);
          $request->validate(['username'=>'required','password'=>'required']);

          $credential = $request->only('username','password');

          if(Auth::attempt($credential)){
             return redirect('/home');
          }
          else{
            return redirect('/login')->with('Login failed');
          }
    }

    public function about()
    {
        return "About Page";
    }
    public function contact()
    {
        return "Contact-us Page";
    }
    public function gallery()
    {
        return "Gallery Page";
    }
    public function login()
    {
        return view('login');
    }


}
