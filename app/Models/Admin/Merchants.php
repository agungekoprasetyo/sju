<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Merchants extends Model
{
    use Sluggable;

    // use SoftDeletes;

    protected $table = 'merchants';
    protected $primaryKey = 'id';
    protected $hidden = array('id');

    // protected $dates = ['deleted_at'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function category(){
        return $this->hasMany(Categories::class, 'merchant_id', 'id');
    }

}
