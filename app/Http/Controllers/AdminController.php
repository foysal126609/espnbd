<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addUser(){
        return view('admin.user.add-user');
    }
    public function manageUser(){
        $allusers= User::all();
        return view('admin.user.manage-user',[
            'allusers'=>$allusers
        ]);
    }
    public function saveUser(Request $request){
         $user = new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =bcrypt($request->password);
        $user->access_level =$request->access_level;
        $user->save();
        return redirect('/add-user')->with('message','User info save successfully');
    }
    public function editUser($id){
        $userById= User::find($id);
        return view('admin.user.edit-user',[
            'userById'=>$userById
        ]);
    }
    public function updateUser(Request $request){
        $userById= User::find($request->user_id);
        $userById->name = $request->name;
//        $userById->email = $request->email;
        $userById->access_level = $request->access_level;
        $userById->save();
        return redirect('/manage-user')->with('message','User info Update successfully');

    }
    public function deleteUser($id){
        $userInfoById = User::find($id);
        $userInfoById->delete();
        return redirect('/manage-user')->with('message','User info Delete successfully');
    }
}
