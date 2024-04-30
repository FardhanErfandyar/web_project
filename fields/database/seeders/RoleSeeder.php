<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * 
     */
    public function run(): void
    {
        $role_admin = Role::UpdateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name' => 'admin']
        );
        $role_user = Role::UpdateOrCreate(
            [
                'name' => 'user'
            ],
            ['name' => 'user']
        );

        $role_guest = Role::UpdateOrCreate(
            [
                'name' => 'guest'
            ],
            ['name' => 'guest']
        );

    }
}
// php artisan db:seed --class=RoleSeeder