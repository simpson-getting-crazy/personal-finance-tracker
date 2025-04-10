<?php

namespace Database\Seeders;

use App\Models\User;
use App\Constants\Currency;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'user@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'currency_preference' => Currency::RUPIAH,
            'remember_token' => Str::random(10),
        ]);
    }
}
