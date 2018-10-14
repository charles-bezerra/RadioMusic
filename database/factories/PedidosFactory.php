<?php

use Faker\Generator as Faker;
use App\Pedidos;

$factory->define(Pedidos::class, function (Faker $faker) {
    $tempo = $faker->date;
    return [
        'musica_id' => function(){
        	$count = Pedidos::get()->count();
        	return Pedidos::get(rand(1, $count));
        },
        'usuario_id' => function(){
        	$count = Pedidos::get()->count();
        	return Pedidos::get(rand(1,$count));	
        },
        'detalhes' => $faker->sentence(20,40),
        'created_at' => $tempo,
        'updated_at' => $tempo
    ];
});
