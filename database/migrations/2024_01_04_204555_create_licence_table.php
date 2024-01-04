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
        Schema::create('licence', function (Blueprint $table) {
            $table->id();
            $table->integer('departement_id');
            $table->integer('specialite_id');
            $table->string('nom_licence');
            $table->date('anneun_id');
            $table->string('order');
            $table->timestamps();
            $table->foreign('departement_id')->references('id')->on('departement')->onDelete('cascade');
            $table->foreign('specialite_id')->references('id')->on('specialite')->onDelete('cascade');
            $table->foreign('anneun_id')->references('id')->on('anneun')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licence');
    }
};
