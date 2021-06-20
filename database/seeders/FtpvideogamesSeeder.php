<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FtpvideogamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Aqui le indicamos cuantos registros automaticos queremos que haga
        \App\Models\Ftpvideogame::factory(50)->create();
    }
}
