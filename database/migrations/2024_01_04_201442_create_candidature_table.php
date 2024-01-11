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
            $table->unsignedBigInteger('candidat_id');
            $table->string('anneeun');
            $table->timestamps();
            $table->foreign('candidat_id')->references('id')->on('candidat')->onDelete('cascade');
            $table->foreign('anneeun')->references('anneeun')->on('annee_univ')->onDelete('cascade');
        
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
