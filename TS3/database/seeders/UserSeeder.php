<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'le-iy',
            'full_name' => 'Lei Caabay',
            'email' => 'leicaabay@gmail.com',
        ]);
    }
}
