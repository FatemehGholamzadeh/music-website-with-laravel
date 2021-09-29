<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class musicvideo extends Model
{
     protected $table='musicvideos';
        protected $guarded = ['id'];

    public function categories()
    {
        return $this->morphToMany(Category::class,'cate');
    }
}
