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
            $table->integer('closing_month')->nullable(true)->change();
            $table->date('contract_date')->nullable(true)->change();
            $table->boolean('enable')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('taxpayers', function (Blueprint $table) {
            $table->integer('closing_month')->nullable(false)->change();
            $table->date('contract_date')->nullable(false)->change();
            $table->boolean('enable')->default(1)->change();
        });
    }
};
