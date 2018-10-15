<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = ['id','anno_inicio','anno_fin'];

    public function estudiantes()
    {
        return $this->hasMany('App\Estudiante');
    }
}
