<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollegeGroupBooksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_group_books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('college_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->integer('book_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('college_id')->references('id')->on('colleges');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('college_group_books');
    }
}
