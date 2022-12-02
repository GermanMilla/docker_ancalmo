<?php

namespace App\Http\Requests\Admin\Registro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.registro.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'Codigo' => ['required', 'string'],
            'danado' => ['required', 'boolean'],
            'descripcion_equipo' => ['required', 'string'],
            'Diagnostico_u_observaciones' => ['required', 'string'],
            'Edicion' => ['required', 'integer'],
            'entregado_firma' => ['required', 'boolean'],
            'fecha' => ['required', 'date'],
            'Fecha_validez' => ['required', 'date'],
            'marca' => ['required', 'string'],
            'modelo' => ['required', 'string'],
            'movimiento_desde' => ['required', 'date'],
            'movimiento_hasta' => ['required', 'date'],
            'movimiento_indefinido' => ['required', 'boolean'],
            'Nuevo' => ['required', 'boolean'],
            'persona_que_entrega' => ['required', 'string'],
            'persona_que_recibe' => ['required', 'string'],
            'recibido_firma' => ['required', 'boolean'],
            'reservado_gerencia' => ['required', 'string'],
            'serie' => ['required', 'string'],
            'tipo_movimiento' => ['required', 'integer'],
            'Ubicacion_equipo' => ['required', 'string'],
            'usado_buen_estado' => ['required', 'boolean'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
