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
        Schema::create('bac', function (Blueprint $table) {
            $table->id();
            $table->integer('option_id');
            $table->string('Moy_national');
            $table->string('Moy_regional');
            $table->string('Moy_general');
            $table->date('Date_obt');
            $table->string('Mention');
            $table->timestamps();
            $table->foreign('option_id')->references('id')->on('option')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bac');
    }
};
