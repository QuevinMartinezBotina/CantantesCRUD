<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/* Para seeders */
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SeederCantantes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            # code...
            DB::table('cantantes')->insert([
                'name_cantante' => Str::random(10),
                'genero' => Str::random(10) . '@gmail.com',
                'pais' => Str::random(10),
            ]);
        };
    }
}
