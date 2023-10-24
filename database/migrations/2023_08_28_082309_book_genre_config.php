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
        Schema::create('books_genres_config', function (Blueprint $table) {
            $table->unsignedBigInteger('books_id');
            $table->unsignedBigInteger('genres_id');
            $table->primary(['books_id', 'genres_id']);

            $table->foreign('books_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('genres_id')->references('genre_id')->on('books_genres')->onDelete('cascade');
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
