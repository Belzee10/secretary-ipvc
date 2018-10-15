<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidades';

    protected $fillable = ['id', 'numero'];

    public function grados()
    {
        return $this->hasMany('App\Grado');
    }
}
