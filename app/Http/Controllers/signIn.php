<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
class signIn extends Controller
{
    //
    public function signIn(Request $req){
        $email = $req->input('email');
        $user_alldata = signup::where('email',$email)->first();
        $id = $user_alldata['id'];
        $user= signup::find($id);
        $req->session()->flash('store_data',$user);//
        if($user !== null){
           if($user['password'] === $req->input('password')){
               return view('/profile',['user'=>$user,'user_sign'=>$user]);
           }else{
               return "incorrect password";
           }
        }else{
            return "incorrect email address";
        }
    }
}
