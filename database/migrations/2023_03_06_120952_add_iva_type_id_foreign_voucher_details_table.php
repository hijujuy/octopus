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
            $table->double('iva_import');
            $table->unsignedBigInteger('iva_type_id');
            $table->foreign('iva_type_id')->references('id')->on('iva_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('voucher_details', function(Blueprint $table) {
            $table->dropForeign('voucher_details_iva_type_id_foreign');
            $table->dropColumn('iva_type_id');
            $table->dropColumn('iva_import');
        });
    }
};
