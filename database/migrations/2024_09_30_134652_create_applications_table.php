<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id(); // Primary key default dengan nama 'id'
            $table->string('cv')->nullable(); // Menyimpan URL atau path file CV yang diunggah
            $table->string('portofolio')->nullable(); // Menyimpan URL atau path file portfolio yang diunggah
            $table->string('status')->default('pending'); // Status lamaran
            $table->timestamps(); // created_at dan updated_at

            // Foreign key user_id
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            // Foreign key job_id
            $table->foreignId('job_id')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
