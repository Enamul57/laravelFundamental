<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employer;
class bindController extends Controller
{
    //
    public function index(employer $key){
        return $key;
    }
}
