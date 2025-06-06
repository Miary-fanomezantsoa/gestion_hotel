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
        Schema::table('reservations_restaurant', function (Blueprint $table) {
            $table->foreign('id_client')
                  ->references('id_client')
                  ->on('clients')
                  ->onDelete('cascade');

            $table->foreign('id_restaurant')
                  ->references('id_restaurant')
                  ->on('restaurants')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations_restaurant', function (Blueprint $table) {
            $table->dropForeign(['id_client']);
            $table->dropForeign(['id_restaurant']);
        });
    }
};
