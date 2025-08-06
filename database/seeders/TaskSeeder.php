<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // Create sample tasks for each user
            Task::create([
                'title' => 'Complete project documentation',
                'description' => 'Write comprehensive documentation for the current project including API documentation and user guides.',
                'status' => 'pending',
                'priority' => 'high',
                'due_date' => Carbon::now()->addDays(7),
                'user_id' => $user->id,
            ]);

            Task::create([
                'title' => 'Review code submissions',
                'description' => 'Review and provide feedback on the latest code submissions from the development team.',
                'status' => 'in_progress',
                'priority' => 'medium',
                'due_date' => Carbon::now()->addDays(3),
                'user_id' => $user->id,
            ]);

            Task::create([
                'title' => 'Update database schema',
                'description' => 'Update the database schema to accommodate new features and optimize performance.',
                'status' => 'completed',
                'priority' => 'low',
                'due_date' => Carbon::now()->subDays(2),
                'user_id' => $user->id,
            ]);

            Task::create([
                'title' => 'Prepare monthly report',
                'description' => 'Compile and prepare the monthly progress report for stakeholders.',
                'status' => 'pending',
                'priority' => 'medium',
                'due_date' => Carbon::now()->addDays(14),
                'user_id' => $user->id,
            ]);
        }

        $this->command->info('Sample tasks created successfully for all users!');
    }
}
