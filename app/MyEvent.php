<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyEvent extends Model
{
    protected $table = 'events';

    public static function getFullAddress()
    {
      return $this->address." ".$this->city;
    }
}
