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
        Schema::create('candidature', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Candidat_id');
            $table->unsignedBigInteger('diplome_id');
            $table->string('etat');
            $table->timestamps();
            $table->foreign('Candidat_id')->references('id')->on('Candidat')->onDelete('cascade');
            $table->foreign('diplome_id')->references('id')->on('diplome')->onDelete('cascade');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidature');
    }
};
