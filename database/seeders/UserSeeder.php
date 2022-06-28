<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name' => 'Gemmarie C. Gutas',
            'email' => 'gem@yahoo.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt ('password123')
            ],
            [
            'name' => 'Harry Styles',
            'email' => 'harry@yahoo.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt ('password123')
             ],
        ];

        foreach($users as $user){
            User::create($user);
        }

    }
}
