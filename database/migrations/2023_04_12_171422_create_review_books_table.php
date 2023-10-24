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
        Schema::create('books_reviews', function (Blueprint $table) {
            $table->bigIncrements('review_id');
            $table->unsignedBigInteger('reviewUser')->nullable(false);
            $table->unsignedBigInteger('reviewBook')->nullable(false);
            $table->integer('reviewRates')->nullable();
            $table->text('reviewText')->nullable();
            $table->foreign('reviewUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reviewBook')->references('book_id')->on('books')->onDelete('cascade');
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
        Schema::dropIfExists('review_books');
    }
};
