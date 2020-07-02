<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_post(Request $request){
        $nama = $request['firstname'] . $request['lastname'];
        return view('welcome', ['nama' => $nama]);
    }
}
