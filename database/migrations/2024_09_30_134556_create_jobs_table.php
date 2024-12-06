<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); // Primary key default dengan nama 'id'
            $table->string('title'); // Kolom untuk judul pekerjaan
            $table->text('description'); // Kolom untuk deskripsi pekerjaan
            $table->string('location')->nullable(); // Kolom untuk lokasi pekerjaan
            $table->string('salary')->nullable(); // Kolom untuk gaji
            $table->string('status'); // Kolom untuk status pekerjaan
            $table->string('employment_type'); // Kolom untuk jenis pekerjaan
            $table->string('experience_level'); // Kolom untuk level pengalaman
            $table->text('skills_required')->nullable(); // Kolom untuk keterampilan yang diperlukan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
