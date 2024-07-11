<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $table="teachers";

    public $fillable=[
        't_fish',
        't_gendr',
        't_email',
        't_tel',
        't_sana',
        't_addres'
    ];
    public function group(){
        return $this->hasMany(Group::class,'tech_id','id');
    }
}
