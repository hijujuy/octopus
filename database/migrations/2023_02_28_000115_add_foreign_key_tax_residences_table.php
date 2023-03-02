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
        Schema::table('tax_residences', function (Blueprint $table) {
            $table->unsignedBigInteger('additional_data_type_id');
            $table->foreign('additional_data_type_id')
                ->references('id')
                ->on('additional_data_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tax_residences', function (Blueprint $table) {
            $table->dropForeign('tax_residences_additional_data_type_id_foreign');
        });
    }
};
