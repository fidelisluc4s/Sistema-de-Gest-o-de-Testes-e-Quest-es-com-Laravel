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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->on('tests')->references('id')->cascadeOnDelete();
            $table->text('enunciado');
            $table->text('respA');
            $table->text('respB');
            $table->text('respC');
            $table->text('respD');
            $table->text('respE');
            $table->char('respCorreta');
            $table->double('valorTotalQuestao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
