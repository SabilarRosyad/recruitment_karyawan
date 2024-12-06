<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interviews;

class InterviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interviews::create([
            'interview_date' => '2025-03-08', // Format tanggal diubah ke Y-m-d
            'interview_mode' => 'online',
            'interview_result' => 'pending',
            'interviewer_name' => 'Hari',
            'application_id' => 1,
        ]);
    }
}
