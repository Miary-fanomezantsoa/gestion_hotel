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
    Schema::create('etages', function (Blueprint $table) {
        $table->id('id_etage');
        $table->string('nom_etage', 100);
        $table->text('description')->nullable();
        $table->integer('niveau');
        $table->integer('capacite_max')->nullable();
        $table->boolean('acces_handicape')->default(false);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etages');
    }
};
