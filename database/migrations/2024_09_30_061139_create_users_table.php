<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom primary key dengan nama default 'id'
            $table->string('username'); // Kolom untuk username
            $table->string('email')->unique(); // Kolom email diubah menjadi unique
            $table->string('password'); // Kolom untuk password
            $table->string('role'); // Kolom role dengan enum
            $table->string('profile_photo')->nullable(); // Kolom untuk foto profil, nullable
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
