<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;
    protected  $table='schools';

    protected $filleble=[
         'deviceName',
         'deviceCode',
         'card_id'
     ];
}
