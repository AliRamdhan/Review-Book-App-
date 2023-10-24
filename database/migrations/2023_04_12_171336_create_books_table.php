<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('bookTitle')->nullable(false);
            $table->string('bookImage')->nullable(false);
            $table->integer('bookPages')->nullable(false);
            $table->text('bookSynopsis')->nullable(false);
            $table->string('bookEditor')->nullable(true);
            $table->string('bookReleaseDate')->nullable(true);
            $table->string('bookISBN')->nullable(true);
            $table->string('bookFormat')->nullable(true);
            $table->string('bookFeatures')->nullable(true);
            $table->unsignedBigInteger('bookAuthor');
            $table->unsignedBigInteger('bookPublisher');
            $table->foreign('bookAuthor')->references('author_id')->on('books_authors')->onDelete('cascade');
            $table->foreign('bookPublisher')->references('publisher_id')->on('books_publishers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
