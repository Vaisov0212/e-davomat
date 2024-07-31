<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table='students';

    protected $fillable=[
        'card_id',
        'studentFish',
        'st_sana',
        'genderType',
        'tel'
    ];
    protected $casts = [
        'st_sana'=>'date:m-d-Y'
     ];
    public function s_groups(){
        return $this->belongsToMany(Group::class);
    }
    public function attendance(){
        return $this->belongsToMany(Attendance::class);
    }
    public function davomat(){
        return $this->belongsToMany(Davomat::class, 'id', 'student_id');
    }
}
