<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function user()
{
    return $this->belongsTo(User::class);
}

public function concert()
{
    return $this->belongsTo(Concert::class);
}


}
