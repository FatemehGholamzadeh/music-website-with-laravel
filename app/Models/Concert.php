<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    //
    protected $table='concerts';
    protected $guarded = ['id'];

    public function users()
    {
        return $this-> belongsToMany(Concert::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
