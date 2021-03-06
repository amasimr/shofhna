<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('favorites', function($table)
            {
                $table->integer('post_id')->unsigned();
                $table->foreign('post_id')->references('id')->on('posts');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
                Schema::drop('favorites');
	}

}
