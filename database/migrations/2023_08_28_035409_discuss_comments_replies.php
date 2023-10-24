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
        Schema::create('discuss_comments_replies', function (Blueprint $table) {
            $table->bigIncrements('replyCommentsDiscuss_id');
            $table->unsignedBigInteger('replyCommentUser');
            $table->unsignedBigInteger('replyCommentDiscuss');
            $table->text('replyCommentText');
            $table->foreign('replyCommentUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('replyCommentDiscuss')->references('replyDiscuss_id')->on('discuss_comments')->onDelete('cascade');
            $table->timestamps();
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
