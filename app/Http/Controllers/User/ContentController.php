<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function content(){
        $product = Product::all();
        return view('user.home.content', compact('product'));

    }

    public function aonam(){
        $listProduct = Product::all();
        return view('user.home.aonam', ['listProduct' => $listProduct]);

    }

    public function quannam(){

        return view('user.home.quannam');

    }

    public function tuisach(){

        return view('user.home.tuisach');

    }

    public function chitiet(){

        return view('user.home.chitiet');

    }

    public function list($id){
        $product = DB::table('product')
        ->where('category_id', $id)
        ->get();
        return view('user.home.content', compact('product'));
    }
}
