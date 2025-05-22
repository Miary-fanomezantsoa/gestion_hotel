<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('chambres', function (Blueprint $table) {
        $table->id('id_chambre');
        $table->string('numero_chambre', 10);
        $table->string('type_chambre', 50)->nullable();
        $table->integer('capacite')->nullable();
        $table->decimal('prix_par_nuit', 10, 2)->nullable();
        $table->string('etat', 20)->default('libre');
        $table->unsignedBigInteger('id_etage');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
