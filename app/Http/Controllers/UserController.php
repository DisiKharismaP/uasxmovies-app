<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUserById($id)
    {
        //temukan id
        $user = User::find($id);
        return response()->json(compact('user'), 200);
    }

    public function getAllUsers()
    {
        $users = User::all();
        return response()->json(compact('users'), 200);
    }

    public function createUser(Request $request)
    {
        $input = $request->all();

        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->favmovie = $input['favmovie'];
        $user->password = Hash::make($input['password']);

        //save untuk menyimpan data ke database
        $user->save();
        return response()->json(compact('user'), 200);
    }

    public function updateUser($id, Request $request)
    {
        //cari user id
        $user = User::find($id);
        $input = $request->all();

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->favmovie = $input['favmovie'];
        $user->password = Hash::make($input['password']);

        //save untuk menyimpan data ke database
        $user->save();
        return response()->json(compact('user'), 200);
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();

        $status = "delete succes";
        return response()->json(compact('status'), 200);
    
    }
}
