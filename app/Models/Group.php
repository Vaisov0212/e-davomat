<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public $table='groups';

    protected $fillable=[
                 'g_name',
                 'g_money',
                 'tech_id'
                        ];
     public function teacher(){
      return $this->belongsTo(Teacher::class,'tech_id','id');
    }
    public function student(){
        return $this->belongsToMany(Student::class);
    }
}
