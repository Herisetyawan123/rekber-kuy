<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rekening;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users
        $users = User::all();

        // Create a rekening for each user
        foreach ($users as $user) {
            Rekening::create([
                'name' => $user->name,
                'jenis' => 'Bank', // Atau bisa diubah sesuai dengan kebutuhan
                'no_rekening' => '1234567890' . Str::random(3),
                'user_id' => $user->id,
            ]);
        }
    }
}
