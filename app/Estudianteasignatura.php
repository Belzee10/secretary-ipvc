<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudianteasignatura extends Model
{
    protected $table = 'estudiantes_asignaturas';

    protected $fillable = ['id','nota','tipo','estudiante_id','asignatura_id','created_at','updated_at'];

    public function estudiante()
    {
        return $this->belongsTo('App\Estudiante');
    }

    public function asignatura()
    {
        return $this->belongsTo('App\Asignatura');
    }
}
