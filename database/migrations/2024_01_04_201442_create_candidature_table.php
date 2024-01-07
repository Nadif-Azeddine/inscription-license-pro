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
            $table->unsignedBigInteger('bac_id');
            $table->unsignedBigInteger('bacpd_id');
            $table->unsignedBigInteger('license_id');
            $table->unsignedBigInteger('anneeun_id');
            $table->string('etat');
            $table->timestamps();
            $table->foreign('candidat_id')->references('id')->on('candidat')->onDelete('cascade');
            $table->foreign('bac_id')->references('id')->on('bac')->onDelete('cascade');
            $table->foreign('bacpd_id')->references('id')->on('bacpd')->onDelete('cascade');
            $table->foreign('license_id')->references('id')->on('license')->onDelete('cascade');
            $table->foreign('anneeun_id')->references('id')->on('anneeun')->onDelete('cascade');
        
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
