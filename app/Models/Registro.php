<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = [
        'Codigo',
        'danado',
        'descripcion_equipo',
        'Diagnostico_u_observaciones',
        'Edicion',
        'entregado_firma',
        'fecha',
        'Fecha_validez',
        'marca',
        'modelo',
        'movimiento_desde',
        'movimiento_hasta',
        'movimiento_indefinido',
        'Nuevo',
        'persona_que_entrega',
        'persona_que_recibe',
        'recibido_firma',
        'reservado_gerencia',
        'serie',
        'tipo_movimiento',
        'Ubicacion_equipo',
        'usado_buen_estado',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'fecha',
        'Fecha_validez',
        'movimiento_desde',
        'movimiento_hasta',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/registros/'.$this->getKey());
    }
}
