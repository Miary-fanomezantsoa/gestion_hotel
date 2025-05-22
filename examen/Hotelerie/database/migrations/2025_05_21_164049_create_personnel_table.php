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
        Schema::create('personnel', function (Blueprint $table) {
            $table->id('id_personnel');
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('poste', 100);
            $table->string('email', 100)->unique();
            $table->string('telephone', 20);
            $table->date('date_embauche');
            $table->decimal('salaire', 10, 2)->nullable();
            $table->boolean('actif')->default(true);
            $table->enum('departement', [
                'Réception',
                'Restauration',
                'Ménage',
                'Direction et Gestion',
                'Bien-être et loisirs',
                'Maintenance et Sécurité'
            ]);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel');
    }
};
