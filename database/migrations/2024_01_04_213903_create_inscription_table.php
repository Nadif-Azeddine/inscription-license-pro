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

        Schema::create('inscription', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('licence_id');
            $table->unsignedBigInteger('candidature_id');
            $table->integer('order');
            $table->string('etat')->default('in progress');
            $table->timestamps();
            $table->foreign('licence_id')->references('id')->on('license')->onDelete('cascade');
            $table->foreign('candidature_id')->references('id')->on('candidature')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription');
    }
};
