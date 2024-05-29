<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create Roles
       $roleSuperAdmin =Role::create(['name'=>'Super Admin']);
       $roleAdmin =Role::create(['name'=>'Admin']);
       $roleEditor =Role::create(['name'=>'Editor']);
       $roleManager =Role::create(['name'=>'Manager']);
        //Permissions List
        $permissions=[

            [
                'group_name'=>'dashboard',
                'permissions'=>[
                    //dashboard Permissions
                    'dashboard.admin',
                    'dashboard.editor',
                    'dashboard.manager',
                    'dashboard.super_admin',
                ]
            ] ,
            [
                'group_name'=>'role',
                'permissions'=>[
                    //Role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                ]
            ],
            [
                'group_name'=>'profile',
                'permissions'=>[
                    //Profile Permissions
                    'profile.view',
                    'profile.edit',
                ]
            ],
            [
                'group_name'=>'user',
                'permissions'=>[
                    //Profile Permissions
                    'user.view',
                    'user.edit',
                    'user.create',
                    'user.delete',
                    'user.block',
                ]
            ],
        ];
        //create assign Permissions
        for($i=0;$i<count($permissions);$i++){

            $permissionGroup=$permissions[$i]['group_name'];

            for($j=0;$j<count($permissions[$i]['permissions']);$j++){
                // create Permissions
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j],'group_name'=>$permissionGroup]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);

            }
        }
        $user = User::find(1);
        $user->assignRole(['Super Admin']);

    }
}
