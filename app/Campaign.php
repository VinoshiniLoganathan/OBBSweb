<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $table = 'campaigns';

    protected $fillable = ['place', 'date','time'];
}
