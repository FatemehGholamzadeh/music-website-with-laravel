<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\str;

class ActivationCode extends Model
{
    protected $fillable = ['user_id' , 'code' , 'used' , 'expire'];

    /**
     * @param $query
     * @param $user
     * @return mixed
     */
    public function scopeCreateCode($query , $user)
    {
        $code = $this->code();

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    private function code()
    {
        do {
            $code = str ::random(60);
            $check_code = static::whereCode($code)->get();
        } while( ! $check_code->isEmpty() );

        return $code;
    }
}
