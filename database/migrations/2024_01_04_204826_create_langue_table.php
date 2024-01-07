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

        Schema::create('langue', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->string('name');
            $table->string('key');
            $table->text('translation');
            $table->timestamps();
            $table->unique([ 'key']);
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langue');
    }
};
