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
        Schema::create('Candidat', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ville_id');
            $table->unsignedBigInteger('etablissement_id');
            $table->string('adresse'); 
            $table->string('num_tel'); 
            $table->string('CIN'); 
            $table->string('CNE');
            $table->integer('num_apoge');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ville_id')->references('id')->on('ville')->onDelete('cascade');
            $table->foreign('etablissement_id')->references('id')->on('etablissement')->onDelete('cascade');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
