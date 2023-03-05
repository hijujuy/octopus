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
        Schema::create('numerations', function (Blueprint $table) {
            $table->id();
            $table->integer('first')->default(0);
            $table->integer('last')->default(0);
            $table->integer('next')->default(1);
            $table->unsignedBigInteger('sale_point_id')->nullable();
            $table->foreign('sale_point_id')->references('id')->on('sale_points');
            $table->unsignedBigInteger('voucher_type_id')->nullable();
            $table->foreign('voucher_type_id')->references('id')->on('voucher_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('numerations', function(Blueprint $table) {
            $table->dropForeign('numerations_sale_point_id_foreign');
            $table->dropForeign('numerations_voucher_type_id_foreign');
        });

        Schema::dropIfExists('numerations');
    }
};
