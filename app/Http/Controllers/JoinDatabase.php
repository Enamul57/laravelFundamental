<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\choice;
class JoinDatabase extends Controller
{
    //
    public function index(){
       // return DB::connection('mysql2')->table('choices')->get();
       return choice::all();
    }
}
