<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensordua extends Model
{
    use HasFactory;
    protected $fillable = [
        'value_suhu',
           'value_kelembaban',
           'value_pm25',
           'value_pm10',
           'value_co',
           'value_co2',
      ];
}
