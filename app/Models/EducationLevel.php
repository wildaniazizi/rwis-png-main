<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory;

    protected $table = 'education_levels';
    
    protected $primaryKey = 'education_level_id';

    protected $fillable = [
        'education_level_id',
        'education_level_name',
        'is_archived',
    ];
}
