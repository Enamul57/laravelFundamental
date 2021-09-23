<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class memberlist extends Controller
{
    //
    public function showMember(){
        $data =  member::paginate(5);
        return view('memberProfile',['members'=>$data]);
    }
    public function deleteData($id){
        $data = member::find($id);
        $data->delete();
        return redirect('member');
    }
    // public function update(Request $req){
    //     $data = member::find($id);
    //     $data->name= $req->user;
    //     $data->email= $req->email;
    //     $data->address = $req->address;
        
    //     return $req->input();
    // }
    public function showData($id){
        $data = member::find($id);
        return view('update',['member'=>$data]);
    }
    public function update(Request $req){
        $data = member::find($req->id);
        $data->name = $req->user;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        return redirect('member');
    }
}
