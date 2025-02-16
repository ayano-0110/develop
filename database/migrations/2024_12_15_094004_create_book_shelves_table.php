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
        Schema::create('book_shelves', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->string('author'); //著者
            $table->string('summary')->nullable();//あらすじ
            $table->string('impression')->nullable();//感想
            $table->string('memo')->nullable();//メモ
            $table->string('image_path')->nullable();  
            $table->bigInteger('user_id');
            $table->bigInteger('genre_id')->nullable();//ジャンルテーブル
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
        Schema::dropIfExists('book_shelves');
    }
};
