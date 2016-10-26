<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Expediente\Tipologia::class,
	function(Faker\Generator $faker){

		return [
			'nombre' => $faker->unique()->name,
		];
});

$factory->define(App\Models\Expediente\Estatu::class,
	function(Faker\Generator $faker){
		
		return [
			'nombre' => $faker->unique()->name
		];
});

$factory->define(App\Models\Expediente\Expediente::class,
	function(Faker\Generator $faker){
		
		return [
			'codigo' => $faker->unique()->name,
			'user_id' => function(){
				return factory(App\User::class)->create()->id;
			},
			'tipologia_id' => function(){
				return factory(App\Models\Expediente\Tipologia::class)
						->create()->id;
			},
			'estatu_id' => function(){
				return factory(App\Models\Expediente\Estatu::class)
						->create()->id;
			},
			'fecha_registro' => Carbon\Carbon::now()
		];
});

$factory->define(App\Models\Expediente\Complicidade::class,
	function(Faker\Generator $faker){
		
		return [
			'nombre' => $faker->unique()->name
		];
});

$factory->define(App\Models\Expediente\Resultado::class,
	function(Faker\Generator $faker){
		
		return [
			'nombre' => $faker->unique()->name
		];
});

$factory->define(App\Models\Expediente\Decisorio::class, 
	function(Faker\Generator $faker){
		
		return [
			'nombre' => $faker->unique()->name
		];
});

$factory->define(App\Models\Expediente\Empleado::class,
	function(Faker\Generator $faker){
		
		return [
			'cedula' => $faker->unique()->randomNumber(null),
			'nombres' => $faker->firstName.' '.$faker->firstName,
			'apellidos' => $faker->lastName.' '.$faker->lastName,
			'cargo_actual' => $faker->jobTitle,
			'ubicacion_actual' => $faker->streetName,
			'relacion_actual' => $faker->state,
			'telefono' => "4454456789"
		];
}); 

$factory->define(App\Models\Expediente\Investigado::class,
	function(Faker\Generator $faker){
		
		return [
			'fecha' => Carbon\Carbon::now(),
			'empleado_id' => function(){
				return factory(App\Models\Expediente\Empleado::class)
						->create()->id;
			},
			'expediente_id' => function(){
				return factory(App\Models\Expediente\Expediente::class)
						->create()->id;
			},
			'complicidade_id' => function(){
				return factory(App\Models\Expediente\Complicidade::class)
						->create()->id;
			},
			'resultado_id' => function(){
				return factory(App\Models\Expediente\Resultado::class)
						->create()->id;
			},
			'decisorio_id' => function(){
				return factory(App\Models\Expediente\Decisorio::class)
						->create()->id;
			},
			'cargo' => function(array $investigado){
				return App\Models\Expediente\Empleado::find(
						$investigado['empleado_id'])->cargo_actual;
			},
			'ubicacion' => function(array $investigado){
				return App\Models\Expediente\Empleado::find(
						$investigado['empleado_id'])->ubicacion_actual;
			},
			'relacion' => function(array $investigado){
				return App\Models\Expediente\Empleado::find(
						$investigado['empleado_id'])->relacion_actual;
			}
		];
});



