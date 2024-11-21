<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Enums\Permission;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Role::cases() as $role) {
            app(RoleModel::class)->findOrCreate($role->value);
        }

        foreach (Permission::cases() as $permission) {
            app(PermissionModel::class)->findOrCreate($permission->value);
        }
    }
}
