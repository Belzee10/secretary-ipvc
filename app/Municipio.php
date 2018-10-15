<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    protected $fillable = ['id','nombre'];

    public function consejos()
    {
        return $this->hasMany('App\Consejopopular');
    }
}
