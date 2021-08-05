<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $attributes = [
        'guard_name' => 'web'
    ];
}
