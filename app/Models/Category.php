<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function musics()
    {
        return $this->morphedByMany(Music::class,'cate');
    }
    public function musicvideos()
    {
        return $this->morphedByMany(musicvideo::class,'cate');
    }
    public function albums()
    {
        return $this->morphedByMany(Album::class,'cate');
    }
}
