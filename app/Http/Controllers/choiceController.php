<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\choice;
use Validator;

class choiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return choice::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)

    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return choice::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {            //
            //$choice =  choice::find($id);
            $choice =  choice::find($id);
            $choice->favorite_food = $req->food;
            $choice->favorite_sports = $req->sports;
            $results = $choice->save();
            if($results){
                return "id ".$id." is updated";
            }else{
                return "data is not updated";
            }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $choice =  choice::find($id);
        $result = $choice->delete();
        if($result){
            return "succesfull deletion";
        }else{
            return "deletion failed";
        }

    }
}
