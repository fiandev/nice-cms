<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $items = [];

        for ($i=1; $i < 2000000; $i++) { 
           $items[] = [
            'name' => uniqid(),
            'email' => uniqid(). '@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt("12345"),
            'created_at' => now(),
            'updated_at' => now(),
           ];
        }


        User::insert($items);

        
    }
}
