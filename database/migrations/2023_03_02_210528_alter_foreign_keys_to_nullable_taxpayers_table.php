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
        Schema::table('taxpayers', function (Blueprint $table) {
            $table->unsignedBigInteger('delegation_id')->nullable(true)->change();
            $table->unsignedBigInteger('tax_residence_id')->nullable(true)->change();
            $table->unsignedBigInteger('key_state_id')->nullable(true)->change();
            $table->unsignedBigInteger('key_type_id')->nullable(true)->change();
            $table->unsignedBigInteger('person_type_id')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('taxpayers', function (Blueprint $table) {
            $table->unsignedBigInteger('delegation_id')->nullable(false)->change();
            $table->unsignedBigInteger('tax_residence_id')->nullable(false)->change();
            $table->unsignedBigInteger('key_state_id')->nullable(false)->change();
            $table->unsignedBigInteger('key_type_id')->nullable(false)->change();
            $table->unsignedBigInteger('person_type_id')->nullable(false)->change();
        });
    }
};
