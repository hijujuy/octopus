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
        Schema::table('voucher_details', function (Blueprint $table) {
            $table->double('tribute_import');
            $table->unsignedBigInteger('tribute_type_id');
            $table->foreign('tribute_type_id')->references('id')->on('tribute_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('voucher_details', function(Blueprint $table) {
            $table->dropForeign('voucher_details_tribute_type_id_foreign');
            $table->dropColumn('tribute_type_id');
            $table->dropColumn('tribute_import');
        });
    }
};
