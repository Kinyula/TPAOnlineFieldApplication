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
        Schema::table('tpa_field_application_data', function (Blueprint $table) {
            $table->string('allocation_status')->default('un assigned');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tpa_field_application_data', function (Blueprint $table) {
            $table->string('allocation_status')->default('un assigned');
        });
    }
};