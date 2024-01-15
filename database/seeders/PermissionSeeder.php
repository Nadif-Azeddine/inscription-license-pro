<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'createUser',
            'readUser',
            'updateUser',
            'deleteUser',
            'createRole',
            'readRole',
            'updateRole',
            'deleteRole',
            'createPermission', 
            'readPermission',
            'updatePermission',
            'deletePermission',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'nom' => $permission,
                'description' => $permission.'description'
            ]);
        }
    }
}
