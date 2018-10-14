<?php

use Illuminate\Database\Seeder;
use App\Pedidos;
class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pedidos::class, 60)->create();
    }
}
