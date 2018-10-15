<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consejopopular extends Model
{
    protected $table = 'consejos_populares';

    protected $fillable = ['id', 'nombre','municipio_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Estudiante');
    }
}
