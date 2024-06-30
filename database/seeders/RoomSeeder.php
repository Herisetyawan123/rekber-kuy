<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'user@mail.com')->first();
        if($user){
            $chat = Chat::create([
                'title' => 'Jual Beli Manok',
                'code' => Str::random(5),
                'user_id' => $user->id,
            ]);

            $transaction = Transaction::create([
                'room_id' => $chat->id,
                'seller_id' => $user->id,
                'amount' => 100000,
            ]);
        }
    }
}
