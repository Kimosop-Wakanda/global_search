<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    // Seed the application's database.
     
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $this->call([
            UsersTableSeeder::class,
            CustomersTableSeeder::class,
            TicketsTableSeeder::class,
            PaymentsTableSeeder::class,
        ]);

    }
}


// php artisan migrate:refresh --seed
