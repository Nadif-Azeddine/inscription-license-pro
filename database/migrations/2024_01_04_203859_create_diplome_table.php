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
        Schema::create('diplome', function (Blueprint $table) {
            $table->id();
            $table->integer('etablissement_id');
            $table->integer('bacpd_id');
            $table->integer('bac_id');
            $table->string('nom_diplome');
            $table->timestamps();
            $table->foreign('etablissement_id')->references('id')->on('etablissement')->onDelete('cascade');
            $table->foreign('bacpd_id')->references('id')->on('bacpd')->onDelete('cascade');
            $table->foreign('bac_id')->references('id')->on('bac')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplome');
    }
};
