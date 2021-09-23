<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student_serial;

class student_info extends Model
{
    use HasFactory;
    public $table='student_info';
    public function getInfo(){
        return $this->hasOne(student_serial::class,'roll','id');
    }
}
