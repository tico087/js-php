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
        Schema::create('key_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('objective_id');
            $table->foreign('objective_id')->references('id')->on('objectives')->onDelete('cascade');
            $table->string('title', 255);
            $table->longText('description')->nullable();
            $table->double('target_value')->default(0)->nullable();
            $table->double('current_value')->default(0)->nullable();
            $table->double('progress')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('key_results');
    }
};
