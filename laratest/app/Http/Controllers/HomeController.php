<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class HomeController extends Controller
{

    /*function __construct(){
        //session
    }*/
    
    function index(Request $request){

        /*$data  = ['id'=>'1233', 'name'=>'alamin'];
        return view('home.index', $data);*/

        /*return view('home.index')
                ->with('name', 'alamin')
                ->with('id', '1233');*/

        /*return view('home.index')
                ->withName('alamin')
                ->withId('1233');*/

        /*$v = view('home.index');
        $v->withName('alamin');
        $v->withId('1234');
        return $v;*/

        //$users = $this->getStudentList();

        //$users = User::all();
        $users = DB::table('user_table')
                        ->join('accounts', 'user_table.userId', '=', 'accounts.accId')
                        ->get();

        return view('home.index')->with('users', $users);
    }


    public function create(Request $request){
        return view('home.create');
    }

    public function store(Request $request){

       /* $validate  = Validator::make($request->all(), [
            'username'  => 'required|max:5',
            'name'      => 'required',
            'password'  => 'required',
            'type'      => 'required',
            'cgpa'      => 'required'
        ]);
        if($validate->fails()){
            //return redirect()->route('home.create')
                               // ->with('errors', $validate->errors())
                                //->withInput();
            return back()
                    ->with('errors', $validate->errors())
                    ->withInput();
        }*/


      /*  $this->validate($request, [
            'username'  => 'required|max:5',
            'name'      => 'required',
            'password'  => 'required',
            'type'      => 'required',
            'cgpa'      => 'required'
        ])->validate();*/

        //$validation->validate();


/*        $request->validate([
            'username'  => 'required|max:5',
            'name'      => 'required',
            'password'  => 'required',
            'type'      => 'required',
            'cgpa'      => 'required'
        ])->validate();*/

        if($request->hasFile('myfile')){
            $file = $request->file('myfile');
            /*echo "File Name: ". $file->getClientOriginalName()."<br>";
            echo "File Extension: ". $file->getClientOriginalExtension()."<br>";
            echo "File Size: ". $file->getSize()."<br>";
            echo "File Mime Type: ". $file->getMimeType();*/

            if($file->move('upload', $file->getClientOriginalName())){
               
                $user = new User();
                $user->username     = $request->username;
                $user->name         = $request->name;
                $user->password     = $request->password;
                $user->type         = $request->type;
                $user->cgpa         = $request->cgpa;
                $user->dept         = $request->dept;
                $user->save();

            }else{
                echo "<h1>File upload error!</h1>";
            }
        }
        
        return redirect()->route('home.index');
    }

    function edit($id){

        //$users = $this->getStudentList();
        //find one student by ID from array

        $user = User::find($id);
        return view('home.edit')->with('user', $user);

    }

    function update($id, Request $request){

        //$newUser = ['id'=>$id, 'name'=>$request->name,'email'=>$request->email, 'password'=>$request->password];
        //$users = $this->getStudentList();
        //find one student by ID from array $& replace it's value
        //updated list

        $user = User::find($id);
        $user->username     = $request->username;
        $user->name         = $request->name;
        $user->password     = $request->password;
        $user->type         = $request->type;
        $user->cgpa         = $request->cgpa;
        $user->dept         = $request->dept;
        $user->save();

        return redirect()->route('home.index');

    }

    function delete($id){

        //$users = $this->getStudentList();
        //show comfirm view
        //$user = ['id'=>'2', 'name'=>'abc','email'=>'abc@aiub.com', 'password'=>'456'];
        
        $user = User::find($id);
        return view('home.delete')->with('user', $user);

    }

    function destroy($id, Request $request){
        
        //$users = $this->getStudentList();
        //find student by id & delete
        //updated list

        if(User::destroy($id)){
            return redirect()->route('home.index');
        }else{
            return redirect()->route('home.delete', $id);
        }
    }

    function getStudentList(){
        return  [
                    ['id'=>'1', 'name'=>'alamin','email'=>'abc@gmail.com', 'password'=>'123'],
                    ['id'=>'2', 'name'=>'abc','email'=>'abc@aiub.com', 'password'=>'456'],
                    ['id'=>'3', 'name'=>'xyz','email'=>'xyz@gmail.com', 'password'=>'789']
                ];
    }
}