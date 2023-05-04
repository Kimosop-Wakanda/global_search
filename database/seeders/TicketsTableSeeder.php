<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'title' => 'Issue with email delivery',
                'description' => 'Emails are not being delivered to the recipients',
                'customer_id' => 1,
                'scheduled_date' => '2023-05-05',
                'user_id' => 1, // valid user_id foreign key value
            ],
            [
                'title' => 'Website not loading',
                'description' => 'The website is showing a blank page',
                'customer_id' => 1,
                'scheduled_date' => '2023-05-07',
                'user_id' => 2, // valid user_id foreign key value
            ],
            [
                'title' => 'Issue with email delivery',
                'description' => 'Emails are not being delivered to the recipients',
                'customer_id' => 1,
                'scheduled_date' => '2023-05-05',
                'user_id' => 1, // valid user_id foreign key value
            ],
            [
                'title' => 'Website not loading',
                'description' => 'The website is showing a blank page',
                'customer_id' => 1,
                'scheduled_date' => '2023-05-07',
                'user_id' => 2, // valid user_id foreign key value
            ],
            [
                'title' => 'Issue with email delivery',
                'description' => 'Emails are not being delivered to the recipients',
                'customer_id' => 1,
                'scheduled_date' => '2023-05-05',
                'user_id' => 1, // valid user_id foreign key value
            ],
            [
                'title' => 'Website not loading',
                'description' => 'The website is showing a blank page',
                'customer_id' => 1,
                'scheduled_date' => '2023-05-07',
                'user_id' => 2, // valid user_id foreign key value
            ],
            // add more sample records as needed
        ]);
    }
}
