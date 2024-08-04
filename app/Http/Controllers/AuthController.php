<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Account;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function login(){
        return view('login');
    }


    public function postLogin(Request $req)
    {
        $dataUserLogin = [
            "email" => $req->email,
            "password" => $req->password,
        ];

        if (Auth::attempt($dataUserLogin)) {
            // Đăng nhập thành công
            if (Auth::user()->role == '1') {
                return redirect()->route('admin.products.listProduct')->with([
                    'message' => 'Đăng nhập thành công',
                    'user' => Auth::user(),
                ]);
            } else {
                // echo "User"; // redirect user
                return redirect()->route('user.home.content')->with([
                    'message' => "Đăng nhập thành công",
                    'user' => Auth::user(),
                ]);
            }
        } else {
            // Đăng nhập thất bại
            return redirect()->route('login')->with([
                "message" => "Email hoặc Password không chính xác",
            ]);
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with([
            'message' => 'đăng xuất thành công'
        ]);
    }

    public function register(){
        return view('register');
    }

    public function postRegister(Request $req){
        $check = User::where('email', $req->email)->exists();
        if($check){
            return redirect()->route('register')->with([
                'message' => 'Email đã tồn tại'
            ]);
        }else{
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password)
            ];
            $newUser = User::create($data);
            // Auth::login($newUser); // tự động đăng nhập


            //bắt nhập
            return redirect()->route('login')->with([
                'message' => 'đăng ký thành công'
            ]);
        }
    }

}
