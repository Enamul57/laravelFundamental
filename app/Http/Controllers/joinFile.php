<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class joinFile extends Controller
{
    //
    public function joinTwoTableData (){
        return DB::table('student_info')->join('student_serial','student_info.id','=','student_serial.id')
        //->where('members.id','=','6')
        ->select('student_info.*')
        ->get();
    }
}
