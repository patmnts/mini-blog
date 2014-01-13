<?php

use Illuminate\Database\Migrations\Migration;

class Article extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('article', function ($article)
		{
			$article->increments('idarticle');
			$article->string('title',50);
			$article->string('description',50);
			$article->string('info',1500);
			$article->string('author',50);
			$article->dateTime('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('article');
	}

}