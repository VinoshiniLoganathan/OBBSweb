<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefits extends Model
{
    protected $table = 'benefits';

    protected $fillable = ['frequency','description'];
}
