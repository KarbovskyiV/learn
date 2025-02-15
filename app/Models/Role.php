<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public const int ROLE_USER = 1;
    public const int ROLE_ADMIN = 2;
    public const int ROLE_MANAGER = 3;
}
