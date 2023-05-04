<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'username' => 'johndoe',
                'expiry_date' => '2023-06-30',
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'username' => 'janesmith',
                'expiry_date' => '2024-12-15',
            ],
            [
                'first_name' => 'Richie',
                'last_name' => 'Mounga',
                'username' => 'rich',
                'expiry_date' => '2023-06-30',
            ],
            [
                'first_name' => 'Aaron',
                'last_name' => 'Smith',
                'username' => 'smith',
                'expiry_date' => '2024-01-01',
            ],
            [
                'first_name' => 'Rouger',
                'last_name' => 'shake',
                'username' => 'rts',
                'expiry_date' => '2026-02-30',
            ],
            [
                'first_name' => 'Rachel',
                'last_name' => 'ross',
                'username' => 'ross',
                'expiry_date' => '2024-04-55',
            ],
            // add more sample records as needed
        ]);
    }
}
