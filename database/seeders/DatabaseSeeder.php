<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $rolesAndPermissions = [
            'User' => ['view events', 'filter events', 'search events', 'view details', 'reserve place', 'generate ticket'],
            'Organizer' => ['create events', 'manage events', 'view own event stats', 'manage reservations'],
            'Administrator' => ['manage categories', 'validate events', 'view stats'],
        ];

        foreach ($rolesAndPermissions as $roleName => $permissions) {
            $role = Role::create(['name' => $roleName]);

            foreach ($permissions as $permissionName) {
                Permission::create(['name' => $permissionName]);
                $role->givePermissionTo($permissionName);
            }
        }

        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        $adminRole = Role::where('name', 'Administrator')->first();
        $adminUser->assignRole($adminRole);
    }
}