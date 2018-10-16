<?php

use Faker\Generator as Faker;
use App\Musicas;

$factory->define(Musicas::class, function (Faker $faker) {
	$tempo = $faker->date;
    return [
        'nome' => $faker->realText(18),
        'cantor' => $faker->name,
        'album' => $faker->realText(19),
        'banda' => $faker->realText(10),
        'id_arquivo_musica' => 'C:\Users\charl\Dropbox\Projetos\RadioMusic\public\audios/Musica-1539659580.mp3',
        'id_arquivo_img' => 'C:\Users\charl\Dropbox\Projetos\RadioMusic\public\albuns/Album-1539659580.jpg',
        'created_at' => $tempo,
        'updated_at' => $tempo
    ];
});
