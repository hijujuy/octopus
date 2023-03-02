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
        Schema::table('components', function (Blueprint $table) {
            $table->unsignedBigInteger('monotribute_data_id');
            $table->foreign('monotribute_data_id')->references('id')->on('monotribute_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('components', function (Blueprint $table) {
            $table->dropForeign('components_monotribute_data_id_foreign');
            $table->dropColumn('monotribute_data_id');
        });
    }
};
