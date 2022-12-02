<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Codigo'), 'has-success': fields.Codigo && fields.Codigo.valid }">
    <label for="Codigo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.Codigo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Codigo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Codigo'), 'form-control-success': fields.Codigo && fields.Codigo.valid}" id="Codigo" name="Codigo" placeholder="{{ trans('admin.registro.columns.Codigo') }}">
        <div v-if="errors.has('Codigo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Codigo') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('danado'), 'has-success': fields.danado && fields.danado.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="danado" type="checkbox" v-model="form.danado" v-validate="''" data-vv-name="danado"  name="danado_fake_element">
        <label class="form-check-label" for="danado">
            {{ trans('admin.registro.columns.danado') }}
        </label>
        <input type="hidden" name="danado" :value="form.danado">
        <div v-if="errors.has('danado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('danado') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcion_equipo'), 'has-success': fields.descripcion_equipo && fields.descripcion_equipo.valid }">
    <label for="descripcion_equipo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.descripcion_equipo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.descripcion_equipo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripcion_equipo'), 'form-control-success': fields.descripcion_equipo && fields.descripcion_equipo.valid}" id="descripcion_equipo" name="descripcion_equipo" placeholder="{{ trans('admin.registro.columns.descripcion_equipo') }}">
        <div v-if="errors.has('descripcion_equipo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcion_equipo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Diagnostico_u_observaciones'), 'has-success': fields.Diagnostico_u_observaciones && fields.Diagnostico_u_observaciones.valid }">
    <label for="Diagnostico_u_observaciones" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.Diagnostico_u_observaciones') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.Diagnostico_u_observaciones" v-validate="'required'" id="Diagnostico_u_observaciones" name="Diagnostico_u_observaciones"></textarea>
        </div>
        <div v-if="errors.has('Diagnostico_u_observaciones')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Diagnostico_u_observaciones') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Edicion'), 'has-success': fields.Edicion && fields.Edicion.valid }">
    <label for="Edicion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.Edicion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Edicion" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Edicion'), 'form-control-success': fields.Edicion && fields.Edicion.valid}" id="Edicion" name="Edicion" placeholder="{{ trans('admin.registro.columns.Edicion') }}">
        <div v-if="errors.has('Edicion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Edicion') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('entregado_firma'), 'has-success': fields.entregado_firma && fields.entregado_firma.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="entregado_firma" type="checkbox" v-model="form.entregado_firma" v-validate="''" data-vv-name="entregado_firma"  name="entregado_firma_fake_element">
        <label class="form-check-label" for="entregado_firma">
            {{ trans('admin.registro.columns.entregado_firma') }}
        </label>
        <input type="hidden" name="entregado_firma" :value="form.entregado_firma">
        <div v-if="errors.has('entregado_firma')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('entregado_firma') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Fecha_validez'), 'has-success': fields.Fecha_validez && fields.Fecha_validez.valid }">
    <label for="Fecha_validez" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.Fecha_validez') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.Fecha_validez" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('Fecha_validez'), 'form-control-success': fields.Fecha_validez && fields.Fecha_validez.valid}" id="Fecha_validez" name="Fecha_validez" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('Fecha_validez')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Fecha_validez') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('marca'), 'has-success': fields.marca && fields.marca.valid }">
    <label for="marca" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.marca') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.marca" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('marca'), 'form-control-success': fields.marca && fields.marca.valid}" id="marca" name="marca" placeholder="{{ trans('admin.registro.columns.marca') }}">
        <div v-if="errors.has('marca')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('marca') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('modelo'), 'has-success': fields.modelo && fields.modelo.valid }">
    <label for="modelo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.modelo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.modelo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('modelo'), 'form-control-success': fields.modelo && fields.modelo.valid}" id="modelo" name="modelo" placeholder="{{ trans('admin.registro.columns.modelo') }}">
        <div v-if="errors.has('modelo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('modelo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('movimiento_desde'), 'has-success': fields.movimiento_desde && fields.movimiento_desde.valid }">
    <label for="movimiento_desde" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.movimiento_desde') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.movimiento_desde" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('movimiento_desde'), 'form-control-success': fields.movimiento_desde && fields.movimiento_desde.valid}" id="movimiento_desde" name="movimiento_desde" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('movimiento_desde')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('movimiento_desde') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('movimiento_hasta'), 'has-success': fields.movimiento_hasta && fields.movimiento_hasta.valid }">
    <label for="movimiento_hasta" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.movimiento_hasta') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.movimiento_hasta" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('movimiento_hasta'), 'form-control-success': fields.movimiento_hasta && fields.movimiento_hasta.valid}" id="movimiento_hasta" name="movimiento_hasta" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('movimiento_hasta')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('movimiento_hasta') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('movimiento_indefinido'), 'has-success': fields.movimiento_indefinido && fields.movimiento_indefinido.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="movimiento_indefinido" type="checkbox" v-model="form.movimiento_indefinido" v-validate="''" data-vv-name="movimiento_indefinido"  name="movimiento_indefinido_fake_element">
        <label class="form-check-label" for="movimiento_indefinido">
            {{ trans('admin.registro.columns.movimiento_indefinido') }}
        </label>
        <input type="hidden" name="movimiento_indefinido" :value="form.movimiento_indefinido">
        <div v-if="errors.has('movimiento_indefinido')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('movimiento_indefinido') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('Nuevo'), 'has-success': fields.Nuevo && fields.Nuevo.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="Nuevo" type="checkbox" v-model="form.Nuevo" v-validate="''" data-vv-name="Nuevo"  name="Nuevo_fake_element">
        <label class="form-check-label" for="Nuevo">
            {{ trans('admin.registro.columns.Nuevo') }}
        </label>
        <input type="hidden" name="Nuevo" :value="form.Nuevo">
        <div v-if="errors.has('Nuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nuevo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('persona_que_entrega'), 'has-success': fields.persona_que_entrega && fields.persona_que_entrega.valid }">
    <label for="persona_que_entrega" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.persona_que_entrega') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.persona_que_entrega" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('persona_que_entrega'), 'form-control-success': fields.persona_que_entrega && fields.persona_que_entrega.valid}" id="persona_que_entrega" name="persona_que_entrega" placeholder="{{ trans('admin.registro.columns.persona_que_entrega') }}">
        <div v-if="errors.has('persona_que_entrega')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('persona_que_entrega') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('persona_que_recibe'), 'has-success': fields.persona_que_recibe && fields.persona_que_recibe.valid }">
    <label for="persona_que_recibe" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.persona_que_recibe') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.persona_que_recibe" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('persona_que_recibe'), 'form-control-success': fields.persona_que_recibe && fields.persona_que_recibe.valid}" id="persona_que_recibe" name="persona_que_recibe" placeholder="{{ trans('admin.registro.columns.persona_que_recibe') }}">
        <div v-if="errors.has('persona_que_recibe')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('persona_que_recibe') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('recibido_firma'), 'has-success': fields.recibido_firma && fields.recibido_firma.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="recibido_firma" type="checkbox" v-model="form.recibido_firma" v-validate="''" data-vv-name="recibido_firma"  name="recibido_firma_fake_element">
        <label class="form-check-label" for="recibido_firma">
            {{ trans('admin.registro.columns.recibido_firma') }}
        </label>
        <input type="hidden" name="recibido_firma" :value="form.recibido_firma">
        <div v-if="errors.has('recibido_firma')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('recibido_firma') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('reservado_gerencia'), 'has-success': fields.reservado_gerencia && fields.reservado_gerencia.valid }">
    <label for="reservado_gerencia" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.reservado_gerencia') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.reservado_gerencia" v-validate="'required'" id="reservado_gerencia" name="reservado_gerencia"></textarea>
        </div>
        <div v-if="errors.has('reservado_gerencia')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('reservado_gerencia') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('serie'), 'has-success': fields.serie && fields.serie.valid }">
    <label for="serie" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.serie') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.serie" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('serie'), 'form-control-success': fields.serie && fields.serie.valid}" id="serie" name="serie" placeholder="{{ trans('admin.registro.columns.serie') }}">
        <div v-if="errors.has('serie')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('serie') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipo_movimiento'), 'has-success': fields.tipo_movimiento && fields.tipo_movimiento.valid }">
    <label for="tipo_movimiento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.tipo_movimiento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tipo_movimiento" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipo_movimiento'), 'form-control-success': fields.tipo_movimiento && fields.tipo_movimiento.valid}" id="tipo_movimiento" name="tipo_movimiento" placeholder="{{ trans('admin.registro.columns.tipo_movimiento') }}">
        <div v-if="errors.has('tipo_movimiento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipo_movimiento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Ubicacion_equipo'), 'has-success': fields.Ubicacion_equipo && fields.Ubicacion_equipo.valid }">
    <label for="Ubicacion_equipo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.Ubicacion_equipo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Ubicacion_equipo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Ubicacion_equipo'), 'form-control-success': fields.Ubicacion_equipo && fields.Ubicacion_equipo.valid}" id="Ubicacion_equipo" name="Ubicacion_equipo" placeholder="{{ trans('admin.registro.columns.Ubicacion_equipo') }}">
        <div v-if="errors.has('Ubicacion_equipo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Ubicacion_equipo') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('usado_buen_estado'), 'has-success': fields.usado_buen_estado && fields.usado_buen_estado.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="usado_buen_estado" type="checkbox" v-model="form.usado_buen_estado" v-validate="''" data-vv-name="usado_buen_estado"  name="usado_buen_estado_fake_element">
        <label class="form-check-label" for="usado_buen_estado">
            {{ trans('admin.registro.columns.usado_buen_estado') }}
        </label>
        <input type="hidden" name="usado_buen_estado" :value="form.usado_buen_estado">
        <div v-if="errors.has('usado_buen_estado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('usado_buen_estado') }}</div>
    </div>
</div>


