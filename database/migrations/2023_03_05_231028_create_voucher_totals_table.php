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
        Schema::create('voucher_totals', function (Blueprint $table) {
            $table->id();
            $table->double('taxed');
            $table->double('not_taxed');
            $table->double('exempt');
            $table->double('bonus');
            $table->double('deduction');
            $table->double('others_tributes');
            $table->double('total');
            $table->timestamps();
            $table->unsignedBigInteger('voucher_id');
            $table->foreign('voucher_id')->references('id')->on('vouchers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('voucher_totals', function(Blueprint $table) {
            $table->dropForeign('voucher_totals_voucher_id_foreign');
        });

        Schema::dropIfExists('voucher_totals');
    }
};
