<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';
    
    protected $primaryKey = 'permission_id';

    protected $fillable = [
        'permission_id',
        'permission_name',
        'is_archived',
    ];
}
