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
        Schema::table('commandes_restaurant', function (Blueprint $table) {
            $table->foreign('id_reservation')
                  ->references('id_reservation')
                  ->on('reservations_restaurant')
                  ->onDelete('cascade');

            $table->foreign('id_menu')
                  ->references('id_menu')
                  ->on('menus')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commandes_restaurant', function (Blueprint $table) {
            $table->dropForeign(['id_reservation']);
            $table->dropForeign(['id_menu']);
        });
    }
};
