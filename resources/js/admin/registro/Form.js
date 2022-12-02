import AppForm from '../app-components/Form/AppForm';

Vue.component('registro-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Codigo:  '' ,
                danado:  false ,
                descripcion_equipo:  '' ,
                Diagnostico_u_observaciones:  '' ,
                Edicion:  '' ,
                entregado_firma:  false ,
                fecha:  '' ,
                Fecha_validez:  '' ,
                marca:  '' ,
                modelo:  '' ,
                movimiento_desde:  '' ,
                movimiento_hasta:  '' ,
                movimiento_indefinido:  false ,
                Nuevo:  false ,
                persona_que_entrega:  '' ,
                persona_que_recibe:  '' ,
                recibido_firma:  false ,
                reservado_gerencia:  '' ,
                serie:  '' ,
                tipo_movimiento:  '' ,
                Ubicacion_equipo:  '' ,
                usado_buen_estado:  false ,
                
            }
        }
    }

});