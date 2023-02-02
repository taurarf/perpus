<?php

namespace Database\Seeders;

use App\Models\orang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        orang::create([
            'nama' => 'taura',
        ]);
    }
}
