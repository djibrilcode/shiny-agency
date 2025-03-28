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
        Schema::create('sous_familles', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_sous_famille');
            $table->string('image_sous_famille');
            $table->unsignedBigInteger('famille_id');
            $table->foreign('famille_id')->references('id')->on('familles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_familles');
    }
};
