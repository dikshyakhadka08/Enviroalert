<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enviro extends Model
{
    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $table = 'enviro';
    
    // Define the mass assignable attributes
    protected $fillable = ['year', 'death', 'floodNo', 'rainlvl', 'region', 'floodtimes', 'district'];
}
