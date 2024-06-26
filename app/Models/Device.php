<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    public $table='devices';

    protected $fillable=[
        'deviceName',
        'deviceCode'
    ];
}
