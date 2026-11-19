<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Lei Caabay',
                'email' => 'leicaabay@gmail.com',
                'phone' => '09123456781'
            ],
            [
                'full_name' => 'Allyssa Kirsten Yasona',
                'email' => 'allyssayasona@gmail.com',
                'phone' => '09123456782'
            ],
            [
                'full_name' => 'John Benedict Sazon',
                'email' => 'jbsazon@gmail.com',
                'phone' => '09123456783'
            ],
            [
                'full_name' => 'Charles Miguel Martin',
                'email' => 'migsmartin@gmail.com',
                'phone' => '09123456784'
            ],
            [
                'full_name' => 'Allison Grace See',
                'email' => 'allisonsee@gmail.com',
                'phone' => '09123456785'
            ]
        ]);
    }
}
