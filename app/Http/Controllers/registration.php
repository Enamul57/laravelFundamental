<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;

class registration extends Controller
{
    
    public function authentication(Request $req){
         $data = new signup();
         $session = $req->input('name');
         $req->session()->flash('reg_user',$session);
         $data->name = $req->name;
         $data->email = $req->email;
         $data->phone = $req->phone;
         $data->password = $req->password;

        $data->save();
        //return view('greeting',['user'=>$session]);
        return redirect('sign-in');

    }
}
