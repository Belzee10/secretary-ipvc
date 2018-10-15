<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = 'grados';

    protected $fillable = ['id', 'numero','unidad_id'];

    public function unidad()
    {
        return $this->belongsTo('App\Unidad');
    }

    public function grupos()
    {
        return $this->hasMany('App\Grupo');
    }
}
