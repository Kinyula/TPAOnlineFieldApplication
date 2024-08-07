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
        Schema::create('ports', function (Blueprint $table) {
            $table->id();
            $table->string('port_name');
            $table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('region_id')->nullable()->constrained('regions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('district_id')->nullable()->constrained('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('ward_id')->nullable()->constrained('wards')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ports');
    }
};
