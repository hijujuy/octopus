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
        Schema::create('tax_residences', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('location');
            $table->string('postal_code');
            $table->integer('state_id');
            $table->string('state_description');
            $table->string('additional_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_residences');
    }
};
