<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('categories')->truncate();

        DB::table('categories')->insert(array(
            array(
                'title' => 'The Grace Company',
                'slug'  => Str::slug('The Grace Company'),
                'lang'  => 'en'),
            array(
                'title' => 'Hand Quilting',
                'slug'  => Str::slug('Hand Quilting'),
                'lang'  => 'en'),
            array(
                'title' => 'Machine Quilting',
                'slug'  => Str::slug('Machine Quilting'),
                'lang'  => 'en'),
            array(
                'title' => 'Quilting Machine',
                'slug'  => Str::slug('Quilting Machine'),
                'lang'  => 'en'),
            array(
                'title' => 'Quilting Frames',
                'slug'  => Str::slug('Quilting Frames'),
                'lang'  => 'en'),
            array(
                'title' => 'Qnique',
                'slug'  => Str::slug('Qnique'),
                'lang'  => 'en'),
            array(
                'title' => 'Quilting Accessories',
                'slug'  => Str::slug('Quilting Accessories'),
                'lang'  => 'en')
    ));
    }
}
