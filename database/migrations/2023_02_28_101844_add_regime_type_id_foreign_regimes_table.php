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
        Schema::table('regimes', function (Blueprint $table) {
            $table->unsignedBigInteger('regime_type_id');
            $table->foreign('regime_type_id')->references('id')->on('regime_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('regimes', function (Blueprint $table) {
            $table->dropForeign('regimes_regime_type_id_foreign');
            $table->dropColumn('regime_type_id');
        });
    }
};
