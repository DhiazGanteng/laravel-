<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Subject;
use App\Models\User;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Guardian;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
      
        Guardian::factory(30)->create();
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Subject::factory(5)->hasTeachers(1)->create();
        // Teacher::factory(10)->create();
   
    }
}