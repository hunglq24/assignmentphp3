<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContentController extends Controller
{
    public function content(){

        return view('user.home.content');

    }

    public function aonam(){

        return view('user.home.aonam');

    }


}
