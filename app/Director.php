<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directores';

    protected $fillable = ['id','nombre'];
}
