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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('genre');
            $table->enum('type', ['audio', 'e-book']);
            $table->text('description')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('cover_url')->nullable();
            $table->string('content_url')->nullable();
            $table->decimal('rating')->default(0);
            $table->integer('listening_time')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
