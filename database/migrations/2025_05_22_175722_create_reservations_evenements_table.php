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
        Schema::create('reservations_evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom_client');
            $table->string('email_client');
            $table->string('telephone_client');
            
            $table->unsignedBigInteger('salle_id');
            $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade');
            
            $table->string('type_evenement'); // exemple : mariage, anniversaire
            $table->date('date_evenement');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_evenements');
    }
};
