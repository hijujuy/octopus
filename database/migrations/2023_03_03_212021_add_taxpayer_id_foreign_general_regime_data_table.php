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
            $table->dropForeign('taxpayers_general_regime_data_id_foreign');
            $table->dropColumn('general_regime_data_id');
        });

        Schema::table('general_regime_data', function (Blueprint $table) {
            $table->unsignedBigInteger('taxpayer_id')->nullable();
            $table->foreign('taxpayer_id')->references('id')->on('taxpayers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('general_regime_data', function (Blueprint $table) {
            $table->dropForeign('general_regime_data_taxpayer_id_foreign');
            $table->dropColumn('taxpayer_id');
        });

        Schema::table('taxpayers', function (Blueprint $table) {
            $table->unsignedBigInteger('general_regime_data_id')->nullable();
            $table->foreign('general_regime_data_id')->references('id')->on('general_regime_data');
        });
    }
};
