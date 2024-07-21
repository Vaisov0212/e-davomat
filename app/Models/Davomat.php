<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Davomat extends Model
{
    use HasFactory;
    public $table='davomats';
    protected $fillable=[
        'student_id',
        'group_id',
        'chesk',
        'lesson_id'
    ];
    public function lesson(){
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
    public function student(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
