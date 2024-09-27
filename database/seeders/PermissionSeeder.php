<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'role_view', 'guard_name' => 'Roles'],
            ['name' => 'role_create', 'guard_name' => 'Roles'],
            ['name' => 'role_edit', 'guard_name' => 'Roles'],
            ['name' => 'role_delete', 'guard_name' => 'Roles'],
            ['name' => 'user_view', 'guard_name' => 'Users'],
            ['name' => 'user_create', 'guard_name' => 'Users'],
            ['name' => 'user_edit', 'guard_name' => 'Users'],
            ['name' => 'user_delete', 'guard_name' => 'Users'],
            ['name' => 'company_view', 'guard_name' => 'Company'],
            ['name' => 'company_create', 'guard_name' => 'Company'],
            ['name' => 'company_edit', 'guard_name' => 'Company'],
            ['name' => 'company_delete', 'guard_name' => 'Company'],
        ];

            DB::table('permissions')->insert($permissions);
    }
}
