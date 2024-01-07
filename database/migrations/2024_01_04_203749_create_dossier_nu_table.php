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

        Schema::create('dossier_nu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dossier_id');
            $table->boolean('CIN'); 
            $table->boolean('bac'); 
            $table->boolean('diplome'); 
            $table->boolean('relevé_ann1'); 
            $table->boolean('relevé_ann2'); 
            $table->timestamps();
            $table->foreign('dossier_id')->references('id')->on('dossier')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_nu');
    }
};
