<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    function index(){

    	return view('login.index');
    }

    function verify(Request $request){
    	
    	if($request->username == $request->password){
    		
          /*  $request->session()->put('username', $request->username);
            $request->session()->put('password', $request->password);
            $request->session()->get('username');
            $request->session()->foget('username');
            $request->session()->flush();
            
            $request->session()->flash('msg', 'invalid user');
            $request->session()->flash('error', 'db error');
            $request->session()->get('msg');
            $request->session()->keep('msg');
            $request->session()->reflash();

            $request->session()->has('username');
            $request->session()->pull('username');*/

            $request->session()->put('username', $request->username);

    		return redirect('/home');

    	}else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
        }
    }
}
