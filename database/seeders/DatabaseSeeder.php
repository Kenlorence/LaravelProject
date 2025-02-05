<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use GuzzleHttp\Promise\Create;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    
    public function run(): void
    {
        /* User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
        // Seeding Users
        User::factory(10)->create();

        // Seeding Students (Make sure this model exists)
        Student::factory(100)->create();

    } 
}
