<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_serial extends Model
{
    use HasFactory;
    public $table='student_serial';
    public function getInfo(){
        return $this->hasOne('App\Models\student_info');
    }
}
