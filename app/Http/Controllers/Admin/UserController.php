<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function listUser(){
        $listUser = User::paginate(5);
        return view('admin.users.list-user')
        ->with([
            'listUser' => $listUser
        ]);
    }

    public function addUser(){
        return view('admin.users.add-user');
    }

    public function addPostUser(Request $req){
        $data = [
            'name' => $req->nameUser,
            'email' => $req->emailUser,
            'password' => $req->passwordUser,
            'role' => $req->roleUser,
        ];
        User::create($data);
        return redirect()->route('admin.users.listUser')->with([
            'message' => 'thêm mới thành công'
        ]);
    }

    public function deleteUser($user_id){
        $user = User::find($user_id);
        $user->delete();
        return redirect()->route('admin.users.listUser')->with([
            'message' => 'xóa thành công'
        ]);
    }

    public function updateUser($user_id){
        $user = User::find($user_id);
        return view('admin.users.update-user')->with([
            'user' => $user
        ]);
    }

    public function updatePutUser($user_id, Request $req){
        $user = User::where('user_id', $user_id)->first();
        $data = [
            'name' => $req->nameUser,
            'email' => $req->emailUser,
            'password' => $req->passwordUser,
            'role' => $req->roleUser,

        ];
        User::where('user_id', $user_id)->update($data);
        return redirect()->route('admin.users.listUser')->with([
            'message' => 'Sửa thành công'
        ]);
    }

    public function detailUser($user_id){
        $user = User::where('user_id', $user_id)->first();
        return view('admin.users.detail-user')->with([
            'user' => $user
        ]);
    }
}
