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
        Schema::create('curriculo', function (Blueprint $table) {
            $table->id();
            $table->string('sobre');
            $table->string('cursos');
            $table->string('formacoes');
            $table->string('experiencias');
            $table->string('contatos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculo');
    }
};
