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
        Schema::create('bacpd', function (Blueprint $table) {
            $table->id();
            $table->integer('typebpd_id');
            $table->string('Moy_s1');
            $table->string('Moy_s2');
            $table->string('Moy_s3');
            $table->string('Moy_s4');
            $table->date('Date_obt');
            $table->string('Mention');
            $table->timestamps();
            $table->foreign('typebpd_id')->references('id')->on('typebpd')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bacpd');
    }
};
