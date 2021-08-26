<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'user_name' => 'superadmin',
            'name' => 'abdallah sasa',
            'email' => 'contact@abdallahsasa.com',
            'phone' => '122324',
            'address' => 'address',
            'cv' => 'cv_url',
            'category_id' => 0,
            'max_hour_rate' => 0,
            'min_hour_rate' => 0,
            'password' => Hash::make('password'),
        ];
        $role = Role::findByName('admin');
        // $role2=Role::create(['name' => 'employee']);
        // $permission = Permission::create(['name' => 'skill_create']);
        // $permission2 = Permission::create(['name' => 'skill_update']);
        $user_created=   User::create($data);
        $role->givePermissionTo('Full Permission');

        $user_created->save();
        $user_created->assignRole('admin');;
    }
}
