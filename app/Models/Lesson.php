<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public $table='lessons';
    protected $fillable=[

        'group_id',
        'lessonData',
        'lessonTime'
    ];
    protected $casts = [
        'lessonData'=>'date:d-m-Y',
          'lessonTime'=>'date:H:s'
     ];
    public function groups(){
        return $this->belongsTo(Group::class, 'group_id','id');
    }
    public function davomat(){
        return $this->belongsToMany(Davomat::class, 'id', 'lesson_id');
    }
    // public function attendances(){
    //     return $this->belongsTo(Attendance::class, 'id','lesson_id');
    // }

}
