<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // booksテーブルを生成する。
        Schema::create('books', function(Blueprint $book){
            $book->increments('id');
            $book->integer('user_id');
            $book->string('title');
            $book->text('intro');
            $book->date('created');
            $book->timestamps();
            $book->string('pic_file_name', 256);
            $book->integer('pic_file_size');
            $book->string('pic_content_type', 256);
            $book->timestamp('pic_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
