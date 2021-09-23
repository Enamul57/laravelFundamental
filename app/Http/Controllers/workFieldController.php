<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employer;
class workFieldController extends Controller
{
    //
   public function show(){
        return employer::all();
   }
}
