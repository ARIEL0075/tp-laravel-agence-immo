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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titre');
             $table->longtext('description');
            $table->integer('surface');
            $table->integer('chambre');
            $table->integer('nbre_de_piece');
             $table->integer('etage');
              $table->integer('prix');
               $table->string('ville');
                $table->string('adresse');
                 $table->string('code_postal');
                  $table->boolean('vendu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
