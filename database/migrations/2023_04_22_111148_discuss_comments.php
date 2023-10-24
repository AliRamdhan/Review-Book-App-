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
        Schema::create('discuss_comments', function (Blueprint $table) {
            $table->bigIncrements('replyDiscuss_id');
            $table->unsignedBigInteger('replyUser');
            $table->unsignedBigInteger('replyDiscuss');
            $table->text('replyText');
            $table->foreign('replyUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('replyDiscuss')->references('discuss_id')->on('discuss')->onDelete('cascade');

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
        Schema::dropIfExists('reply');
    }
};
