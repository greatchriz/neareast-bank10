<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Balance;
use App\Models\History;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'profilePicture' => 'test.jpg',
            'account_number' => '3800000000',
        ]);

        User::factory(6)->create();



        // $balances = Balance::factory(20)->create([
        //     'user_id' => $user->id
        // ]);

        // foreach ($balances as $balance) {
        //     $history = $balance->recordHistory();
        // }



    }
}
