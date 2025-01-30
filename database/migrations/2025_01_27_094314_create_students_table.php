<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name');
            $table->string(column:'email');
            $table->string(column:'phone_no');
            $table->string(column:'learning_track');
            $table->string(column:'linkedin_username')->nullable();
            $table->string(column:'twitter_username')->nullable();
            $table->string(column:'image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table:'students');
    }
};
