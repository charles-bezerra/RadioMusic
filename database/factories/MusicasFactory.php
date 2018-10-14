<?php

use Faker\Generator as Faker;
use App\Musicas;

$factory->define(Musicas::class, function (Faker $faker) {
	$tempo = $faker->date;
    return [
        'nome' => $faker->realText(18),
        'cantor' => $faker->name,
        'albun' => $faker->realText(19),
        'audio' => '',
        'created_at' => $tempo,
        'updated_at' => $tempo
    ];
});
