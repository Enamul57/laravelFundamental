<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    use HasFactory;
    // public function getPhoneAttribute($value){
    //     return $value = '01244564';
    // }
    // public function setEmailAttribute($value){
    //     $this->attributes['email'] = $value."@gmail.com";

    // }
    public function getInfo(){
        return $this->hasMany('App\Models\work_field','memberid','id');
   }
   
}
