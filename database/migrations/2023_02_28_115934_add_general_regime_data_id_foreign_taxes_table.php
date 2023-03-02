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
        Schema::table('taxes', function (Blueprint $table) {
            $table->unsignedBigInteger('general_regime_data_id');
            $table->foreign('general_regime_data_id')->references('id')->on('general_regime_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('taxes', function (Blueprint $table) {
            $table->dropForeign('taxes_general_regime_data_id_foreign');
            $table->dropColumn('general_regime_data_id');
        });
    }
};
