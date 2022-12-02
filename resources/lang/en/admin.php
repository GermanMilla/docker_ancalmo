<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'activated' => 'Activated',
            'email' => 'Email',
            'first_name' => 'First name',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'last_name' => 'Last name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'registro' => [
        'title' => 'Registros',

        'actions' => [
            'index' => 'Registros',
            'create' => 'New Registro',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Codigo' => 'Codigo',
            'danado' => 'Danado',
            'descripcion_equipo' => 'Descripcion equipo',
            'Diagnostico_u_observaciones' => 'Diagnostico u observaciones',
            'Edicion' => 'Edicion',
            'entregado_firma' => 'Entregado firma',
            'fecha' => 'Fecha',
            'Fecha_validez' => 'Fecha validez',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'movimiento_desde' => 'Movimiento desde',
            'movimiento_hasta' => 'Movimiento hasta',
            'movimiento_indefinido' => 'Movimiento indefinido',
            'Nuevo' => 'Nuevo',
            'persona_que_entrega' => 'Persona que entrega',
            'persona_que_recibe' => 'Persona que recibe',
            'recibido_firma' => 'Recibido firma',
            'reservado_gerencia' => 'Reservado gerencia',
            'serie' => 'Serie',
            'tipo_movimiento' => 'Tipo movimiento',
            'Ubicacion_equipo' => 'Ubicacion equipo',
            'usado_buen_estado' => 'Usado buen estado',
            
        ],
    ],

    'role' => [
        'title' => 'Roles',

        'actions' => [
            'index' => 'Roles',
            'create' => 'New Role',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'guard_name' => 'Guard name',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];