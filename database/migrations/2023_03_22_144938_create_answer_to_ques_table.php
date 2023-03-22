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
        Schema::create('answer_to__ques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('answer_id')->constrained();
            $table->integer('questioner_id')->constrained();
            $table->string('answer_comment'); //追加
            $table->string('answer_item_URL'); //追加
            $table->string('answer_num'); //追加
            $table->string('que_title');
            $table->string('que_comment');

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
        Schema::dropIfExists('answer_to__ques');
    }
};
