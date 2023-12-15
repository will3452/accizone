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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->integer('user_id');
            $table->text('descriptions')->nullable();
            $table->string('type')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('remarks')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
