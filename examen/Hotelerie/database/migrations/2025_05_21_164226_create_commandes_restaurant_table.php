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
        Schema::create('commandes_restaurant', function (Blueprint $table) {
            $table->id('id_commande');

            $table->unsignedBigInteger('id_reservation');
            $table->unsignedBigInteger('id_menu');

            $table->integer('quantite')->default(1);
            $table->enum('statut', ['en préparation', 'servi', 'annulé'])->default('en préparation');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes_restaurant');
    }
};
