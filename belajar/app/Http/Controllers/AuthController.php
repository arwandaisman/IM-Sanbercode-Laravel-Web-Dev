<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('page.register');
    }
    public function welcome(Request $request){
        $namaDepan = $request -> input('frist');
        $namaBelakang = $request -> input('last');
        
        return view('page.welcome', ["namaDepan"=>$namaDepan,"namaBelakang"=>$namaBelakang ]);
    }
}
