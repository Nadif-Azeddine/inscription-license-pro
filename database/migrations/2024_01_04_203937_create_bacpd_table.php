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

        Schema::create('bacpd', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidat_id');
            $table->unsignedBigInteger('diplome_id');
            $table->unsignedBigInteger('specialite_id');
            $table->float('moy_pa');
            $table->float('moy_da');
            $table->integer('nb_etudiant_pa');
            $table->integer('classment_pa');
            $table->integer('nb_etudiant_da');
            $table->integer('classment_da');
            $table->string('date_reussite_pa');
            $table->string('date_reussite_da');
            $table->timestamps();
            $table->foreign('candidat_id')->references('id')->on('candidat')->onDelete('cascade');
            $table->foreign('diplome_id')->references('id')->on('diplome')->onDelete('cascade');
            $table->foreign('specialite_id')->references('id')->on('specialite')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bacpd');
    }
};
