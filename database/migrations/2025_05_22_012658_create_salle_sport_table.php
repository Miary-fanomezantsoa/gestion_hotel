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
    Schema::create('salle_de_sports', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->integer('capacite');
        $table->text('equipements')->nullable();
        $table->boolean('disponible')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salle_sport');
    }
};
