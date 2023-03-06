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
        Schema::create('voucher_details', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->nullable();
            $table->text('description');
            $table->double('amount');
            $table->string('unit');
            $table->double('price');
            $table->double('bonus')->nullable();
            $table->double('deduction')->nullable();
            $table->double('subtotal');
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
        Schema::table('voucher_details', function(Blueprint $table) {
            $table->dropForeign('voucher_details_voucher_id_foreign');
        });

        Schema::dropIfExists('voucher_details');
    }
};
