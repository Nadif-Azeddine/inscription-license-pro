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

        Schema::create('bac', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('option_id');
            $table->unsignedBigInteger('candidat_id');
            $table->string('moy_general');
            $table->string('date_obt');
            $table->string('mention');
            $table->timestamps();
            $table->foreign('option_id')->references('id')->on('bacoption')->onDelete('cascade');
            $table->foreign('candidat_id')->references('id')->on('candidat')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bac');
    }
};
