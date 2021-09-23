<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    public function index(Request $req){
        $result = $req->file('myFile')->store('customFolder');
        return ["result "=>$result];
    
    }
}
