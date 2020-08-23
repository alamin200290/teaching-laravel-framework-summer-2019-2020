<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    function index(){

    	return view('login.index');
    }

    function validation(Request $request){
    	
    	if($request->username == $request->password){
    		//session
    		return redirect('/home');
    	}
    }
}
