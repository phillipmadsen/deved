<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations. 
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('user_id');
			$table->string('street', 45);
            $table->string('street_additional', 45);
			$table->string('city', 45);
			$table->string('state_province_code_2_digit', 2);
			$table->string('zip', 11);
			$table->float('lat');
			$table->float('long');
			$table->text('bio')->nullable();
			$table->string('twitter_username')->nullable();
			 
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
		Schema::drop('profiles');
	}

}
