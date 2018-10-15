<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = ['id', 'numero','grado_id'];

    public function grado()
    {
        return $this->belongsTo('App\Grado');
    }

    public function estudiantes(){
        return $this->hasMany('App\Estudiante');
    }
}
