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
        Schema::create('etablissement', function (Blueprint $table) {
            $table->id();
            $table->integer('ville_id');
            $table->string('nom_etablissement');
            $table->timestamps();
            $table->foreign('ville_id')->references('id')->on('ville')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissement');
    }
};
