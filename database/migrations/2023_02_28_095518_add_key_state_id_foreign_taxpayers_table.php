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
        Schema::table('taxpayers', function (Blueprint $table) {
          $table->unsignedBigInteger('key_state_id');
          $table->foreign('key_state_id')->references('id')->on('key_states');

          $table->unsignedBigInteger('key_type_id');
          $table->foreign('key_type_id')->references('id')->on('key_types');

          $table->unsignedBigInteger('person_type_id');
          $table->foreign('person_type_id')->references('id')->on('person_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('taxpayers', function (Blueprint $table) {
            $table->dropForeign('taxpayers_key_state_id_foreign');
            $table->dropColumn('key_state_id');
            $table->dropForeign('taxpayers_key_type_id_foreign');
            $table->dropColumn('key_type_id');
            $table->dropForeign('taxpayers_person_type_id_foreign');
            $table->dropColumn('person_type_id');
        });
    }
};
