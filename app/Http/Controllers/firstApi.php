<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\choice;
use Illuminate\Support\Facades\Schema;
class firstApi extends Controller
{
    //
    public function index(){
//         return [
//             "id"=> 1,
//             "anime_name"=> "One Piece",
//             "Season"=>22 
// ];
    if(Schema::hasTable('choices')){
        return choice::all();
    }else{
        return "error";
    }

    }
}
