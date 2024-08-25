<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super = User::create([
			'name' => 'Super Admin',
			'email' => 'admin@admin.com',
			'phone' => '0726128568',
			'password' => Hash::make('123456'),		
		]);

        $role_name = 'Admin';
        $role = Role::where('name', $role_name)->first();
        $super->assignRole($role->name);
    }
}
