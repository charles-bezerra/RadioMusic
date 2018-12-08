<?php

use Faker\Generator as Faker;
use App\Pedidos;
use App\User;
use App\Musicas;

$factory->define(Pedidos::class, function (Faker $faker) {
    $tempo = $faker->date;
    return [
        'musica_id' => function(){
        	$count = Musicas::get()->count();
        	return rand(1, $count);
        },
        'usuario_id' => function(){
        	$count = User::get()->count();
        	return rand(1,$count);	
        },
        'detalhes' => $faker->sentence(10,30),
        'created_at' => $tempo,
        'updated_at' => $tempo
    ];
});
