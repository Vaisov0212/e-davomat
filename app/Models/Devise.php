<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devise extends Model
{
    use HasFactory;
    public $table='devices';
    protected $fillable=[
        'deviceName',
        'devicedeviceCode'
    ];
}
