<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job; 

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh menambahkan data pengguna
        Job::create([
            'title' => 'Web Developer',
            'description' => 'Web Developer yang bertugas untuk mengatur website Winnicode',
            'location' => 'Surabaya', // Jangan lupa mengenkripsi password
            'salary' => '1.000.000',
            'status' => 'Open',
            'employment_type' => 'full-time',
            'experience_level' => 'entry', // Jangan lupa mengenkripsi password
            'skills_required' => 'HTML, CSS, Javascript',
        ]);
        
        Job::create([
            'title' => 'Web Developer Laravel',
            'description' => 'Web Developer yang bertugas untuk mengatur website Winnicode',
            'location' => 'Surabaya', // Jangan lupa mengenkripsi password
            'salary' => '0',
            'status' => 'Open',
            'employment_type' => 'internship',
            'experience_level' => 'entry', // Jangan lupa mengenkripsi password
            'skills_required' => 'HTML, CSS, Php, Laravel',
        ]);

        Job::create([
            'title' => 'Database',
            'description' => 'Web Developer yang bertugas untuk mengatur website Winnicode',
            'location' => 'Surabaya', // Jangan lupa mengenkripsi password
            'salary' => '0',
            'status' => 'Open',
            'employment_type' => 'internship',
            'experience_level' => 'entry', // Jangan lupa mengenkripsi password
            'skills_required' => 'HTML, CSS, Php, Laravel',
        ]);

        Job::create([
            'title' => 'Mobile',
            'description' => 'Web Developer yang bertugas untuk mengatur website Winnicode',
            'location' => 'Surabaya', // Jangan lupa mengenkripsi password
            'salary' => '0',
            'status' => 'Open',
            'employment_type' => 'internship',
            'experience_level' => 'entry', // Jangan lupa mengenkripsi password
            'skills_required' => 'HTML, CSS, Php, Laravel',
        ]);

        Job::create([
            'title' => 'Data Engineer',
            'description' => 'Web Developer yang bertugas untuk mengatur website Winnicode',
            'location' => 'Surabaya', // Jangan lupa mengenkripsi password
            'salary' => '0',
            'status' => 'Open',
            'employment_type' => 'internship',
            'experience_level' => 'entry', // Jangan lupa mengenkripsi password
            'skills_required' => 'HTML, CSS, Php, Laravel',
        ]);

        Job::create([
            'title' => 'Data Laravel',
            'description' => 'Web Developer yang bertugas untuk mengatur website Winnicode',
            'location' => 'Surabaya', // Jangan lupa mengenkripsi password
            'salary' => '0',
            'status' => 'Open',
            'employment_type' => 'internship',
            'experience_level' => 'entry', // Jangan lupa mengenkripsi password
            'skills_required' => 'HTML, CSS, Php, Laravel',
        ]);

        Job::create([
            'title' => 'Laravel',
            'description' => 'Web Developer yang bertugas untuk mengatur website Winnicode',
            'location' => 'Surabaya', // Jangan lupa mengenkripsi password
            'salary' => '0',
            'status' => 'Open',
            'employment_type' => 'internship',
            'experience_level' => 'entry', // Jangan lupa mengenkripsi password
            'skills_required' => 'HTML, CSS, Php, Laravel',
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
