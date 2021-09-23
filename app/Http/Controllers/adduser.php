<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class adduser extends Controller
{
    //
    // public function addmember (Request $req){
    //      $data = $req->input('user');
    //      $req->session()->flash('user_key',$data);
    //      $req->file('file')->store('docs');
    //      return redirect('add');
    // }
    public function addmember(Request $req){
        $member = new member();
        $data = $req->input('user');
        $req->session()->flash('user_key',$data);
        $member->name = $req->user;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->password = $req->password;
        $member->save();

        return redirect('member');

    }
    
}
