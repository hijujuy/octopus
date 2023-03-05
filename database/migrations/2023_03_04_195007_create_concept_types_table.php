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
        Schema::create('concept_types', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('description');
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->timestamps();
        });

        Schema::table('vouchers', function(Blueprint $table) {
            $table->unsignedBigInteger('concept_type_id')->nullable();
            $table->foreign('concept_type_id')->references('id')->on('concept_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vouchers', function(Blueprint $table) {
            $table->dropForeign('vouchers_concept_type_id_foreign');
            $table->dropColumn('concept_type_id');
        });

        Schema::dropIfExists('concept_types');
    }
};
