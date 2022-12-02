<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'activated' => true,
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'last_login_at' => $faker->dateTime,
        'last_name' => $faker->lastName,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Registro::class, static function (Faker\Generator $faker) {
    return [
        'Codigo' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'danado' => $faker->boolean(),
        'descripcion_equipo' => $faker->sentence,
        'Diagnostico_u_observaciones' => $faker->text(),
        'Edicion' => $faker->randomNumber(5),
        'entregado_firma' => $faker->boolean(),
        'fecha' => $faker->date(),
        'Fecha_validez' => $faker->date(),
        'marca' => $faker->sentence,
        'modelo' => $faker->sentence,
        'movimiento_desde' => $faker->date(),
        'movimiento_hasta' => $faker->date(),
        'movimiento_indefinido' => $faker->boolean(),
        'Nuevo' => $faker->boolean(),
        'persona_que_entrega' => $faker->sentence,
        'persona_que_recibe' => $faker->sentence,
        'recibido_firma' => $faker->boolean(),
        'reservado_gerencia' => $faker->text(),
        'serie' => $faker->sentence,
        'tipo_movimiento' => $faker->randomNumber(5),
        'Ubicacion_equipo' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        'usado_buen_estado' => $faker->boolean(),
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Role::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'guard_name' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
