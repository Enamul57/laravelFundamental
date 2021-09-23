<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTTP;
class fetchingAPI extends Controller
{
    //
    public function index(){
        $collection =  HTTP::get('https://reqres.in/api/users?page=2');
        return view('api',['collection'=>$collection['data']]);
    }
}
