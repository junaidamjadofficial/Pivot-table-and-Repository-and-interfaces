<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class RoleUser extends Pivot
{
    use HasFactory;
     protected $table = 'role_user'; // specify the pivot table name if it's not following Laravel's naming convention

    protected $fillable = [
        'user_id',
        'role_id',
        'created_at',
        'updated_at',
        // Add any additional fields here
    ];
}
