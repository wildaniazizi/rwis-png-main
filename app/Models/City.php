<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    
    protected $primaryKey = 'city_id';

    protected $fillable = [
        'city_id',
        'province_id',
        'city_name',
        'is_archived',
    ];
}
