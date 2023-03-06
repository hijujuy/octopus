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
        Schema::create('tribute_type_voucher_total', function (Blueprint $table) {
            $table->id();
            $table->double('import');
            $table->unsignedBigInteger('tribute_type_id');
            $table->unsignedBigInteger('voucher_total_id');
            $table->foreign('tribute_type_id')->references('id')->on('tribute_types');
            $table->foreign('voucher_total_id')->references('id')->on('voucher_totals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tribute_type_voucher_total', function(Blueprint $table) {
            $table->dropForeign('tribute_type_voucher_total_tribute_type_id_foreign');
            $table->dropForeign('tribute_type_voucher_total_voucher_total_id_foreign');
        });

        Schema::dropIfExists('tribute_type_voucher_total');
    }
};
