<?php

use App\User;
use APP\chargesTax;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        User::create([
            'name' => 'SkeletonBot',
            'phone' => '0138796654',
            'password' => Hash::make('SkeletonBot@test'),
            'type' => 'Administrator',
            'email' => 'SkeletonBot@test.com',
            'photo' => 'profile.png'
        ]);
    }
}
