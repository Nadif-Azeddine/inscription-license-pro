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
        Schema::create('cordinateur', function (Blueprint $table) {
            $table->id();
            $table->integer('departement_id');
            $table->integer('users_id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('Date_Naiss');
            $table->timestamps();
            $table->foreign('departement_id')->references('id')->on('departement')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cordinateur');
    }
};
