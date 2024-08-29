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
        Schema::create('tpa_field_application_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('port_id')->nullable()->constrained('ports')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->string('application_letter');
            $table->string('confirm_status')->default('confirm');
            $table->string('view_status')->default('not viewed');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpa_field_application_data');
    }
};
