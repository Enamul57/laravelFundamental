<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_info;
class studentController extends Controller
{
    //
    public function studentIndex(){
        return student_info::find(1)->getInfo;
    }
}
