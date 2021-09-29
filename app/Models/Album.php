<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table='albums';
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->morphToMany(Category::class,'cate');
    }
}
