<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        DB::table('users')->insert([
            ['name' => 'super-admin', 'email' => 'gbadnanzain@gmail.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 1],
            ['name' => 'admin', 'email' => 'zain@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 1],
            ['name' => 'erma', 'email' => 'erma@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'yani', 'email' => 'yani@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'ohlokepal', 'email' => 'ohlokepal@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'efie', 'email' => 'efie@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'wisnu', 'email' => 'wisnu@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'yati', 'email' => 'yati@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'yudi', 'email' => 'yudi@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'rachmat', 'email' => 'rachmat@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'hera', 'email' => 'hera@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'windu', 'email' => 'windu@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],
            ['name' => 'zulfakiyah', 'email' => 'ulfah@toshindo-id.com', 'password' => bcrypt('T0sh1nd02505'), 'role_id' => 4],

        ]);
    }
}
