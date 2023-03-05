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
        Schema::create('document_types', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('description');
            $table->date('date_from')->nullable()->default(null);
            $table->date('date_to')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::table('taxpayers', function(Blueprint $table) {
            $table->unsignedBigInteger('document_type_id')->nullable();
            $table->foreign('document_type_id')->references('id')->on('document_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('taxpayers', function(Blueprint $table) {
            $table->dropForeign('taxpayers_document_type_id_foreign');
            $table->dropColumn('document_type_id');
        });

        Schema::dropIfExists('document_types');
    }
};
