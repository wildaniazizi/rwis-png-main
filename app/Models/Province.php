<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';
    
    protected $primaryKey = 'province_id';

    protected $fillable = [
        'province_id',
        'province_name',
        'is_archived',
    ];
}
