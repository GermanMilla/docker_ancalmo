<?php

namespace App\Http\Requests\Admin\Registro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.registro.edit', $this->registro);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'Codigo' => ['sometimes', 'string'],
            'danado' => ['sometimes', 'boolean'],
            'descripcion_equipo' => ['sometimes', 'string'],
            'Diagnostico_u_observaciones' => ['sometimes', 'string'],
            'Edicion' => ['sometimes', 'integer'],
            'entregado_firma' => ['sometimes', 'boolean'],
            'fecha' => ['sometimes', 'date'],
            'Fecha_validez' => ['sometimes', 'date'],
            'marca' => ['sometimes', 'string'],
            'modelo' => ['sometimes', 'string'],
            'movimiento_desde' => ['sometimes', 'date'],
            'movimiento_hasta' => ['sometimes', 'date'],
            'movimiento_indefinido' => ['sometimes', 'boolean'],
            'Nuevo' => ['sometimes', 'boolean'],
            'persona_que_entrega' => ['sometimes', 'string'],
            'persona_que_recibe' => ['sometimes', 'string'],
            'recibido_firma' => ['sometimes', 'boolean'],
            'reservado_gerencia' => ['sometimes', 'string'],
            'serie' => ['sometimes', 'string'],
            'tipo_movimiento' => ['sometimes', 'integer'],
            'Ubicacion_equipo' => ['sometimes', 'string'],
            'usado_buen_estado' => ['sometimes', 'boolean'],
            
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
