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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            //テーブルを作ったら、カラム（タイトル、本文、画像など）を追記する
            $table->string('name'); // 名前を保存するカラム（列）
            $table->string('furigana');  // ふりがなを保存するカラム
            $table->string('telephone_number');
            $table->string('nickname');
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('user_details');
    }
};
