<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users
        $users = User::all();

        // Create a profile for each user
        foreach ($users as $user) {
            Profile::create([
                'user_id' => $user->id,
                'alamat' => 'Default Address ' . Str::random(10),
                'no_telp' => '08123456789',
                'tgl_lahir' => now()->subYears(rand(20, 50))->format('Y-m-d'),
                'pekerjaan' => 'Default Job',
                'gender' => ['male', 'female'][array_rand(['male', 'female'])],
                'biografi' => 'This is a default biography for ' . $user->name,
            ]);
        }
    }
}
