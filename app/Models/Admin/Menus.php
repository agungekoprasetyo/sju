<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menus extends Model
{

    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $hidden = array('id');

    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
