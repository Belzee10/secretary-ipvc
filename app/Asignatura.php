<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';

    protected $fillable = ['id','cantidad_turnos','grado','nombre','created_at','updated_at'];

    public function estudiantesasignaturas()
    {
        return $this->hasMany('App\Estudianteasignatura');
    }
}
