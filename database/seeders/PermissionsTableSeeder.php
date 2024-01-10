<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'announcement_create',
            ],
            [
                'id'    => 18,
                'title' => 'announcement_edit',
            ],
            [
                'id'    => 19,
                'title' => 'announcement_show',
            ],
            [
                'id'    => 20,
                'title' => 'announcement_delete',
            ],
            [
                'id'    => 21,
                'title' => 'announcement_access',
            ],
            [
                'id'    => 22,
                'title' => 'intention_create',
            ],
            [
                'id'    => 23,
                'title' => 'intention_edit',
            ],
            [
                'id'    => 24,
                'title' => 'intention_show',
            ],
            [
                'id'    => 25,
                'title' => 'intention_delete',
            ],
            [
                'id'    => 26,
                'title' => 'intention_access',
            ],
            [
                'id'    => 27,
                'title' => 'mass_intention_create',
            ],
            [
                'id'    => 28,
                'title' => 'mass_intention_edit',
            ],
            [
                'id'    => 29,
                'title' => 'mass_intention_show',
            ],
            [
                'id'    => 30,
                'title' => 'mass_intention_delete',
            ],
            [
                'id'    => 31,
                'title' => 'mass_intention_access',
            ],
            [
                'id'    => 32,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
