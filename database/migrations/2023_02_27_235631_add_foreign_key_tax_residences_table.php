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
            $table->unsignedBigInteger('residence_type_id');
            $table->foreign('residence_type_id')
                ->references('id')
                ->on('residence_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tax_residences', function (Blueprint $table) {
            $table->dropForeign('tax_residences_residence_type_id_foreign');
        });
    }
};
