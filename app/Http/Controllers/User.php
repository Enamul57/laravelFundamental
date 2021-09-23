<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    public function getData(Request $req){
        $req->validate([
            'user'=>'required | max: 10',
            'password'=> 'required | min: 5'
        ]);
        return $req->input();
    }
}
