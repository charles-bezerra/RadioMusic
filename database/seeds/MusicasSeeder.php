<?php

use Illuminate\Database\Seeder;
use App\Musicas;
class MusicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Musicas::class, 100)->create();
    }
}
