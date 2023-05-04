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
                'expiry_date' => '2024-03-15',
            ],
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'username' => 'johnde',
                'expiry_date' => '2023-06-30',
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'username' => 'janesmih',
                'expiry_date' => '2024-03-15',
            ],
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'username' => 'johndo',
                'expiry_date' => '2023-06-30',
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'username' => 'janesmit',
                'expiry_date' => '2024-03-15',
            ],
            // add more sample records as needed
        ]);
    }
}
