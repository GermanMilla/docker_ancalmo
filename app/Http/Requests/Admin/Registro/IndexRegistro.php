<?php

namespace App\Http\Requests\Admin\Registro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.registro.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:Codigo,danado,descripcion_equipo,Edicion,entregado_firma,fecha,Fecha_validez,id,marca,modelo,movimiento_desde,movimiento_hasta,movimiento_indefinido,Nuevo,persona_que_entrega,persona_que_recibe,recibido_firma,serie,tipo_movimiento,Ubicacion_equipo,usado_buen_estado|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
