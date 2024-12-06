<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::create([
            'cv' => 'gguh',
            'portofolio' => 'hjk',
            'status' => 'Pending', // Jangan lupa mengenkripsi password
            'user_id' => '2',
            'job_id' => '1',
        ]);
    }
}
