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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('nida_number')->nullable();
            $table->string('disability_status');
            $table->string('marital_status')->nullable();
            $table->string('professionalism_title')->nullable();
            $table->string('designation')->nullable();
            $table->string('years_of_experience')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_details');
    }
};
