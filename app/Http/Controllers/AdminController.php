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
        //   return view('admin.index' , compact('users'));  
            return redirect()->route('admin.index');
        }
        return view('main.login' , ['message' => 'Incorrect Password']);
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function index(){
        $data['users'] = User::all();
        return view('admin.index', $data);
    }
    
    public function edit($id){
         $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }
    public function update(Request $request , $id){
        
        User::where('id', $id)->update(array(
            'status' => $request['status'],
            "item_name" => $request["item_name"],
            "reciever_name" => $request["reciever_name"],
            "next_of_kin" => $request["next_of_kin"],
            "delivery_option" => $request["delivery_option"],
            "delivery_date" => $request["delivery_date"],
            "weight" => $request["weight"],
            "comment" => $request["comment"],
        ));

        return redirect()->route('admin.index');
    }
}