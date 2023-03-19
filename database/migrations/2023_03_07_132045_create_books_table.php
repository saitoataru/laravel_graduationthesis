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
             $table->bigIncrements('id');
             $table->string('item_name'); //追加
             $table->string('comment'); //追加
             $table->string('item_URL'); //追加
             $table->integer('item_amount'); //追加
             $table->datetime('published'); //追加
            //  $table->bigInteger('user_id'); //Add:user_id
             $table->string('image');
             $table->foreignId('user_id')->constrained();
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
