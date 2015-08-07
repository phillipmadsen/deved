<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articles', function(Blueprint $table)
		{
			$table->enum('choices', ['Publish', 'Draft'])->change();
		});

		Schema::table('articles', function(Blueprint $table) {

		});


	}


}
