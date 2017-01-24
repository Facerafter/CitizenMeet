<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyEvent extends Model
{
    protected $table = 'events';
    protected $fillable = ['organisername', 'organiseremail', 'title', 'url', 'city', 'address','date','starttime','state','country','approved','expired'];
}
