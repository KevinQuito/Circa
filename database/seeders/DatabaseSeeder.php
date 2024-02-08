<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\LTE;
use App\Models\User;
use App\Models\Tasks;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();
        // For single user creating multiple tasks
        $user = User::factory()->create([
            'name' =>'Kevin Quito',
            'email'=> 'kevin@gmail.com',
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Lte::factory(30)->create([
            'user_id'=> $user->id,
        ]);

        Tasks::factory(20)->create([
            'user_id'=> $user->id,
        ]);

        // Tasks::create([
        //     'name' => 'Project Plan',
        //     'description' => 'Description of Project Plan',
        //     'task' => 'Vendor double payment',
        //     'priority' => 'Normal',
        //     'department' => 'Sonepar Telecom',
        //     'responsible' => 'Calero Bill Pay',
        //     'start_date' => '08-22-2023',
        //     'end_date' => '08-31-2023',
        //     'status' => 'DONE',
        // ]);
    }
}
