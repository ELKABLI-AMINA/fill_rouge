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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('slug');
            $table->foreignId('agence_id')->constrained('agences')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image');
            $table->date('date_depart');
            $table->date('date_arrive');
            $table->integer('nb_jours');
            $table->integer('nb_personne');
            $table->date('date_fin_reservation');
            $table->float('prix');
            $table->integer('nb_limite_reservation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
