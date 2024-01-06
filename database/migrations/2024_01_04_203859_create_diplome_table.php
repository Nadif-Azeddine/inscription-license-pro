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

        Schema::create('diplome', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etablissement_id');
            $table->unsignedBigInteger('bacpd_id');
            $table->unsignedBigInteger('bac_id');
            $table->string('nom_diplome');
            $table->timestamps();
            $table->foreign('etablissement_id')->references('id')->on('etablissement')->onDelete('cascade');
            $table->foreign('bacpd_id')->references('id')->on('bacpd')->onDelete('cascade');
            $table->foreign('bac_id')->references('id')->on('bac')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplome');
    }
};
