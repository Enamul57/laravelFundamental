<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class registerController extends Controller
{
    //
    public function validateRegister(Request $req){
         $req->validate([
            'username'=>'required | max: 10',
            'name'=>'required | max: 10',
            'email'=>'required | ',
            'password'=>'required | min: 5'
        ]);
        return view('dashboard');
    }
}
