<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    //
    public function index(){
        //return DB::select('select * from users');
        return User::all();
    }
}
