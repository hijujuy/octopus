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
        Schema::create('sale_points', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('code', 5);
            $table->string('type', 4);
            $table->string('lock', 1);
            $table->date('deleted_at');
            $table->timestamps();
        });

        Schema::table('vouchers', function (Blueprint $table) {
            $table->unsignedBigInteger('sale_point_id');
            $table->foreign('sale_point_id')
                ->references('id')
                ->on('voucher_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vouchers', function (Blueprint $table) {
            $table->dropForeign('vouchers_voucher_type_id_foreign');
        });

        Schema::dropIfExists('sale_points');
    }
};
