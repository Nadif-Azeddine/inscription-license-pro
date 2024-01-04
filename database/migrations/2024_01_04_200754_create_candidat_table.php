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
        Schema::create('Candidat', function (Blueprint $table) {
            $table->id(); 
            $table->integer('user_id');
            $table->integer('ville_id');
            $table->integer('etablissement_id');
            $table->string('Nom'); 
            $table->string('Prenom'); 
            $table->string('Adresse'); 
            $table->date('Date_Naiss'); 
            $table->string('Num_tel'); 
            $table->string('Email'); 
            $table->string('CIN'); 
            $table->string('CNE');
            $table->integer('Num_Apoge');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ville_id')->references('id')->on('ville')->onDelete('cascade');
            $table->foreign('etablissement_id')->references('id')->on('etablissement')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
