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
        [
            'nik' => '1234567890123456',
            'first_name' => 'Devina',
            'last_name' => 'Viantie',
            'username' => 'admin',
            'password' => bcrypt('hipos123'),
            'phone' => '085353625600',
            'email' => 'hi_thisisvinn@gmail.com',
            'role_id' => 1,
            'division_id' => 1
        ],
        [
            'nik' => NULL,
            'first_name' => 'Finance',
            'last_name' => NULL,
            'username' => 'finance',
            'password' => bcrypt('hipos123'),
            'phone' => NULL,
            'email' => NULL,
            'role_id' => 6,
            'division_id' => 2
        ],
        [
            'nik' => NULL,
            'first_name' => 'Sales',
            'last_name' => NULL,
            'username' => 'sales',
            'password' => bcrypt('hipos123'),
            'phone' => NULL,
            'email' => NULL,
            'role_id' => 6,
            'division_id' => 3
        ],
        [
            'nik' => NULL,
            'first_name' => 'Supply Chain',
            'last_name' => NULL,
            'username' => 'supplychain',
            'password' => bcrypt('hipos123'),
            'phone' => NULL,
            'email' => NULL,
            'role_id' => 6,
            'division_id' => 4
        ],
        [
            'nik' => NULL,
            'first_name' => 'Warehouse',
            'last_name' => NULL,
            'username' => 'warehouse',
            'password' => bcrypt('hipos123'),
            'phone' => NULL,
            'email' => NULL,
            'role_id' => 6,
            'division_id' => 5
        ],
    ]);
    }
}
