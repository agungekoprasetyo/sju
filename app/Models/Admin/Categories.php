<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $hidden = array('id');

    
    public function merchant(){
        return $this->belongsTo(Merchants::class);
    }

    public function menu(){
        return $this->hasMany(Menus::class, 'category_id');
    }
}
