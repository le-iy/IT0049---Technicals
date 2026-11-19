<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin01',
                'full_name' => 'AkoSiAdmin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'CashierPerson1',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'CashierPerson2',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'StaffPerson1',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'ManagerPerson1',
                'role' => 'Manager'
            ]
        ]);
    }
}
