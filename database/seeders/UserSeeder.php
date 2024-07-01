<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 // Create admin role
        $adminRole = Role::create(['name' => 'admin']);

        // Create admin user
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        // Assign admin role to admin user
        $adminUser->assignRole($adminRole);


        $userRole = Role::create(['name' => 'user']);

        // Create regular user
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@mail.com',
            'password' => Hash::make('password'),
        ]);
        
        // Assign admin role to admin user
        $user->assignRole($userRole);

        // Create regular user
        $user2 = User::create([
            'name' => 'Regular User2',
            'email' => 'user2@mail.com',
            'password' => Hash::make('password'),
        ]);
        
        // Assign admin role to admin user
        $user2->assignRole($userRole);
    }
}
