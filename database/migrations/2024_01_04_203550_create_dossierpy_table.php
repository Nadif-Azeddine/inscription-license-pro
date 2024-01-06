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
        Schema::disableForeignKeyConstraints();

        Schema::create('dossierpy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dossier_id');
            $table->string('CIN'); 
            $table->string('Bac'); 
            $table->string('diplome'); 
            $table->string('relevé_ann1'); 
            $table->string('relevé_ann2'); 
            $table->timestamps();
            $table->foreign('dossier_id')->references('id')->on('dossier')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossierpy');
    }
};
