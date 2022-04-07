<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data_user = \App\Models\User::all();
        return view('list',['data_user' => $data_user]);
    }

    public function create(Request $request){
        \DB::table('users')->insertGetId(
            ['nama' => $request->nama , 'email' => $request->email, 'password' => $request->password]
        );
        return redirect('list');
    }

    public function edit($id){
        $user = \App\Models\User::find($id);
        return view('edit',['user'=>$user]);
    }

    public function update(Request $request,$id){
        $user = \App\Models\User::find($id);
        $id_user = $user->id;
        \DB::table('users')
        ->where('id','=' ,$id_user)
        ->update(['nama' => $request->nama , 'email' => $request->email, 'password' => $request->password]);
        return redirect('list');
    }

    public function delete($id){
        $user = \App\Models\User::find($id);
        \DB::table('users')->where('id','=' ,$user->id)->delete();
        return redirect('list');
    }
}
