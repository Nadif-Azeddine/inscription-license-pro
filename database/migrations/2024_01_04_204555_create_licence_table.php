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

        Schema::create('license', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departement_id');
            $table->unsignedBigInteger('specialite_id');
            $table->string('nom_licence');
            $table->timestamps();
            $table->foreign('departement_id')->references('id')->on('departement')->onDelete('cascade');
            $table->foreign('specialite_id')->references('id')->on('specialite')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licence');
    }
};
