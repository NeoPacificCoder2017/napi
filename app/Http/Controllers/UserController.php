<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class UserController extends Controller
{
    public function all(){
        $users = User::all();
        return view('users.users', ['users' => $users]);
    }

    public function show($userId){
        $users = User::find($userId);
        return view('users.user');
    }

    public function new(){
        return view('users.user-form');
    }

    public function create(Request $request){
        $input = $request->all();
        $users = new User();
        $users ->lastname = $input['lastname'];
        $users ->firstname = $input['firstname'];
        $users ->pseudo = $input['pseudo'];
        $users ->birthday = $input['birthday'];
        $users ->email = $input['email'];
        $users ->password = $input['password'];
        $users ->save();

        return view('users.user-create-confirmation');
    }

    public function destroy($userId){
        $users = User::find($userId);
        $users ->delete();
        return view('users.user-delete');
    }
}
