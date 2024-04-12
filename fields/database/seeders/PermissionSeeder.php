<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;



class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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


        $permission = Permission::UpdateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            ['name' => 'view_dashboard']
        );

        $permission2 = Permission::UpdateOrCreate(
            [
                'name' => 'view_dashboard_add',
            ],
            ['name' => 'view_dashboard_add']
        );

        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_user->givePermissionTo($permission2);


        $names = ['Hiekam', 'Ikam', 'ikan', 'fardhan'];

        foreach ($names as $name) {
            $user = User::where('name', $name)->first();

            if ($user) {
                if (!$user->hasRole('admin')) {
                    // Tugaskan peran 'admin' ke pengguna jika belum memiliki peran tersebut
                    $user->assignRole('admin');
                }
            } else {
                // Jika pengguna dengan nama pengguna yang sedang diperiksa tidak ditemukan,
                // tetapkan peran 'user_general' ke pengguna tersebut
                $user_general = User::create(['username' => $name]);
                $user_general->assignRole('user_general');
            }
        }

    }
}
