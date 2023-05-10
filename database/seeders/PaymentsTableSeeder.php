<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'transaction_code' => 'TXN001',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'customer_id' => 1,
                'amount' => 100.50,
                'account_number' => 'john123',
                'transaction_date' => '2023-04-28',
            ],
            [
                'transaction_code' => 'TXN222',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'customer_id' => 2,
                'amount' => 75.00,
                'account_number' => 'jane456',
                'transaction_date' => '2023-04-29',
            ],
            [
                'transaction_code' => 'TTN001',
                'first_name' => 'Richie',
                'last_name' => 'Mounga',
                'customer_id' => 3,
                'amount' => 100.50,
                'account_number' => 'richie123',
                'transaction_date' => '2023-04-28',
            ],
            [
                'transaction_code' => 'RXN002',
                'first_name' => 'Aaron',
                'last_name' => 'Smith',
                'customer_id' => 4,
                'amount' => 75.00,
                'account_number' => 'aaron456',
                'transaction_date' => '2023-04-29',
            ],
            [
                'transaction_code' => 'MXN001',
                'first_name' => 'Mary',
                'last_name' => 'jane',
                'customer_id' => 5,
                'amount' => 100.50,
                'account_number' => 'jane123',
                'transaction_date' => '2023-04-28',
            ],
            [
                'transaction_code' => 'TXN004',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'customer_id' => 6,
                'amount' => 75.00,
                'account_number' => 'jane456',
                'transaction_date' => '2023-04-29',
            ],
            // add more sample records as needed
        ]);
    }
}
