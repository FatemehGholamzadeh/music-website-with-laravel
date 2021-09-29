<?php

namespace App;

use App\models\Concert;
use App\models\Payment;
use App\Models\Ticket;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    // protected $table='';

    protected $table='users';
    protected $guarded = ['id'];
  
    protected $fillable = [
        'username','F_name','E_name','phone','city',
        'file-size','state','role', 'email', 'password'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);

    }

    public function concerts()
    {
        return $this-> belongsToMany(Concert::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}