<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::all();

        return view('welcome', [
            'users' => $users
        ]);
    }

  
    public function add_user(){
        return view('add-user');
    }

    public function save_user(Request $request){
        $isSaved =  User::create($request->only(['name', 'email']));

        if($isSaved){
            $users = User::all();

            return view('welcome', [
                'users' => $users
            ]);
        }
        else {
            dd('error');
        }
    }

    public function edit_user($id){
        $user = User::find($id);

        return view('edit-user', [
            'data'=> $user
        ]);
    }

    public function update_user(Request $request, $id){
        $user = User::find($id);
        $isUpdated = $user->update($request->only(['name', 'email']));

        if($isUpdated){
            $users = User::all();

            return view('welcome', [
                'users' => $users
            ]);
        }
        else {
            dd('error');
        }
    }

    
    public function delete_user( $id){
        $user = User::find($id);
        $isDeleted = $user->delete();

        if($isDeleted){
            $users = User::all();

            return view('welcome', [
                'users' => $users
            ]);
        }
        else {
            dd('error');
        }
    }

    //API 

    public function getSingleUser($id){
        return User::find($id);
    }
}
