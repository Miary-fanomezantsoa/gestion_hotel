<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('table_jeux', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('type_jeu', 50);
            $table->integer('num_joueur');
            $table->string('resultat', 50);
            $table->decimal('gain', 10, 2)->default(0);
            $table->decimal('perte', 10, 2)->default(0);
            $table->integer('temps_jeu'); // en secondes
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('table_jeux');
    }
};

