<?php

namespace App\Models;

use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function name(): Attribute
    {
        return new Attribute(
            set: fn ($value) => ucfirst($value),
        );
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}
