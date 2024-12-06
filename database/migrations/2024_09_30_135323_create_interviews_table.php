<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id(); // Primary key default dengan nama 'id'
            $table->dateTime('interview_date'); // Tanggal dan waktu wawancara
            $table->string('interview_mode'); // Mode wawancara
            $table->string('interview_result'); // Hasil wawancara
            $table->string('interviewer_name')->nullable(); // Nama pewawancara
            $table->timestamps(); // created_at dan updated_at

            // Mendefinisikan foreign key constraint
            $table->foreignId('application_id')->references('id')->on('applications')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
