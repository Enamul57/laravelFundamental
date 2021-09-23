<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employer;
class employerController extends Controller
{
    //
    public function employerIndex(){
        // $employe = new employer;
        // $employe->username='john';
        // $employe->email="john";
        // $employe->phone="0123456789";
        // $employe->work_type="developer";
        // $employe->sallary="25000";
        // $employe->save();
        return employer::find(1)->getInfo;

    }

}
