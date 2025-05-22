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
        Schema::create('reservations_restaurant', function (Blueprint $table) {
            $table->id('id_reservation');

            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_restaurant');

            $table->dateTime('date_reservation');
            $table->time('heure');
            $table->integer('nombre_personnes');
            $table->enum('statut', ['confirmée', 'annulée', 'terminée'])->default('confirmée');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_restaurant');
    }
};
