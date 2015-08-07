<?php

use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('tags', function ($table) {

            $table->increments('id');
            $table->string('name');  //name:string, slug:string, lang:string
            $table->string('slug');
            $table->timestamps();
            $table->string('lang', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::drop('tags');
    }
}
