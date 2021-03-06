<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('ArticlesTableSeeder');
     
        $this->call('ArticlesTagsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('FaqsTableSeeder');
        $this->call('MenusTableSeeder');
        $this->call('NewsTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('PhotoGalleriesTableSeeder');
        $this->call('ProjectsTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('SlidersTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('VideosTableSeeder');

	}

}
