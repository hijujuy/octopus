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
            $table->dropForeign('taxpayers_tax_residence_id_foreign');
            $table->dropColumn('tax_residence_id');
        });

        Schema::table('tax_residences', function (Blueprint $table) {
            $table->unsignedBigInteger('taxpayer_id')->nullable();
            $table->foreign('taxpayer_id')->references('id')->on('taxpayers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tax_residences', function (Blueprint $table) {
            $table->dropForeign('tax_residences_taxpayer_id_foreign');
            $table->dropColumn('taxpayer_id');
        });

        Schema::table('taxpayers', function (Blueprint $table) {
            $table->unsignedBigInteger('tax_residence_id')->nullable();
            $table->foreign('tax_residence_id')->references('id')->on('tax_residences');
        });
    }
};
