<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    protected $fillable = ['id','egresado','nomatricula','ci','nombre','apellidos','talla','peso','edad','sexo',
                           'color_piel','color_pelo','color_ojo','procedencia_social_padre','procedencia_social_madre',
                           'direccion','area_atencion','interno','baja','grupo_id','curso_id','consejo_popular_id',
    ];

    public function grupo()
    {
        return $this->belongsTo('App\Grupo');
    }

    public function curso()
    {
        return $this->belongsTo('App\Curso');
    }

    public function consejopopular()
    {
        return $this->belongsTo('App\Consejopopular');
    }
}
