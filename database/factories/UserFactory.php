<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(User::class, function (Faker $faker) {
    $campus = ['Apodi', 'Caicó', 'CNAT', 'Canguaretama', 'Ceará Mirim', 'Cidade Alta', 'Currais Novos', 'Macau', 'Mossoró', 'Ipanguaçu', 'Parelhas', 'Lajes', 'João Câmara', 'Parnamirim', 'Santa Cruz', 'São Gonsalo do Amarante', 'São Paulo do Potengi', 'Zona Norte'];

    $tempo = $faker->date;
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'senha' => $faker->sentence(4, 10),
        'matricula' => $faker->numerify($string = "##############"),
        'campus' => $campus[rand(0,17)],
        'remember_token' => str_random(10),
        'created_at' => $tempo,
        'updated_at' => $tempo
    ];
});
