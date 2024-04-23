<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_users')->insert([
            'nik' => '1234567890123456',
            'first_name' => 'Devina',
            'last_name' => 'Viantie',
            'username' => 'admin',
            'password' => bcrypt('hipos123'),
            'phone' => '085353625600',
            'email' => 'hi_thisisvinn@gmail.com',
            'division_id' => 1
        ],
        [
            'first_name' => 'Finance',
            'username' => 'finance',
            'password' => bcrypt('hipos123'),
            'division_id' => 2
        ],
        [
            'first_name' => 'Sales',
            'username' => 'sales',
            'password' => bcrypt('hipos123'),
            'division_id' => 3
        ],
        [
            'first_name' => 'Supply Chain',
            'username' => 'supplychain',
            'password' => bcrypt('hipos123'),
            'division_id' => 4
        ],
        [
            'first_name' => 'Warehouse',
            'username' => 'warehouse',
            'password' => bcrypt('hipos123'),
            'division_id' => 5
        ],
    );
    }
}
