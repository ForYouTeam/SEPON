<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserPermissionSeeder extends Seeder
{
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'create content']);
        Permission::create(['name' => 'read content']);
        Permission::create(['name' => 'update content']);
        Permission::create(['name' => 'delete content']);

        Role::create(['name' => 'user']);
        Role::create(['name' => 'super-admin']);

        $suadmin = User::create([
            'nama' => 'super admin',
            'email' => 'superadmin@setdaproper.com',
            'password' => Hash::make('nALbeles')
        ]);

        $suadmin->assignRole('super-admin');
    }
}
