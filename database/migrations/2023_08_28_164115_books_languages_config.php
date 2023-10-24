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
        Schema::create('books_languages_config', function (Blueprint $table) {
            $table->unsignedBigInteger('books_id');
            $table->unsignedBigInteger('languages_id');
            $table->primary(['books_id','languages_id']);

            $table->foreign('books_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('languages_id')->references('language_id')->on('books_languages')->onDelete('cascade');
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
