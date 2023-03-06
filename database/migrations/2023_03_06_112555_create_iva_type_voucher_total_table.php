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
        Schema::create('iva_type_voucher_total', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iva_type_id');
            $table->unsignedBigInteger('voucher_total_id');
            $table->double('import');
            $table->foreign('iva_type_id')->references('id')->on('iva_types');
            $table->foreign('voucher_total_id')->references('id')->on('voucher_totals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('iva_type_voucher_total', function(Blueprint $table) {
            $table->dropForeign('iva_type_voucher_total_iva_type_id_foreign');
            $table->dropForeign('iva_type_voucher_total_voucher_total_id_foreign');
        });

        Schema::dropIfExists('iva_type_voucher');
    }
};
