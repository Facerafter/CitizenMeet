<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyEvent extends Model
{
    protected $table = 'events';

    public static function getFullAddressAttribute()
    {
      return$this->attributes['address'} ."". $this->attributes['city'];
    }
}
