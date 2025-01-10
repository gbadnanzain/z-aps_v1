<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('ALTER TABLE roles AUTO_INCREMENT = 1');
        DB::table('roles')->insert([
            ['name' => 'super-admin', 'guard_name' => 'web'],
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'user', 'guard_name' => 'web'],
            ['name' => 'Accounting', 'guard_name' => 'web'],
            ['name' => 'MTC', 'guard_name' => 'web'],
            ['name' => 'MTC-Sales', 'guard_name' => 'web'],
            ['name' => 'Purchasing', 'guard_name' => 'web'],
        ]);
    }
}
