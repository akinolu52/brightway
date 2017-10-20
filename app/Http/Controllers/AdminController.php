<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function signUp(Request $request){

        $admin = new Admin();
        $this->validate($request , [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $input = $request->all();
        
        $admin->email = $request['email'];
        $admin->password = bcrypt($request['password']);
        $admin->save();

        return view('main.login' , ['message' => $request['email']]);
    }

    public function signIn(Request $request){
        
        $users = User::all();

        if( Auth::attempt([ 'email'=> $request['email'] , 'password' => $request['password'] ])){
          return view('/admin/index' , compact('users'));  
        }
        return view('main.login' , ['message' => 'Incorrect Password']);
    }
    
    public function index(){
        $users = User::all();
        return view('admin.index', compact('users'));
    }
    
    public function edit($id){
         $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }
    public function update(Request $request , $id){

        $input = $request->all();
        User::whereId($id)->first()->update($input);
    }
}