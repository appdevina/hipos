<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_units')->insert([
            [
                'name' => 'PCS',
            ],
            [
                'name' => 'LUSIN',
            ],
            [
                'name' => 'PACK',
            ],
            [
                'name' => 'ROLL',
            ],
        ]);
    }
}
