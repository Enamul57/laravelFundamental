<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\choice;
use Validator;
class postApi extends Controller
{
    //
    public function index(Request $req){
       $choice = new choice;
       $choice->favorite_food = $req->food;
       $choice->favorite_sports= $req->sports;
       $result = $choice->save();
       if($result){
           return "Data submitted from frontend to backend";
       }else{
           return "Submitted Failed";
       }
    }
    public function update(Request $req){
        $choice =  choice::find($req->id);
        $choice->favorite_food = $req->food;
        $choice->favorite_sports = $req->sports;
        $results = $choice->save();
        if($results){
            return "id ".$req->id." is updated";
        }else{
            return "data is not updated";
        }
        
    }

    public function delete(Request $req){
        $choice =  choice::find($req->id);
        $result = $choice->delete();
        if($result){
            return "succesfull deletion";
        }else{
            return "deletion failed";
        }
    }

    public function search($name){
        return choice::where('favorite_food',"like","%".$name."%")->get();
    }

    public function validation(Request $req){
        $rules = array(
            'sports' => "required | min: 3"
        );
        
       $validation = Validator::make($req->all(),$rules);
        if($validation->fails()){
            return response()->json($validation->errors(),401);
        }else{
           $choice = new choice;
           $choice->favorite_food = $req->food;
           $choice->favorite_sports= $req->sports;
           $result = $choice->save();
           if($result){
               return "Data submitted";
           }
           return "Not submitted";
        }
    }
}
