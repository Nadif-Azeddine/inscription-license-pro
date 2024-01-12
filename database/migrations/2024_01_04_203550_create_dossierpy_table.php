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
            $table->boolean('CIN')->default(false);
            $table->boolean('bac')->default(false);
            $table->boolean('diplome')->default(false);
            $table->boolean('relevé_ann1')->default(false);
            $table->boolean('relevé_ann2')->default(false); 
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
