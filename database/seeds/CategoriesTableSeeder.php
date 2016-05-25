<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
        	'title' => 'Female',
            'slug' => 'female'
        	]);
       	DB::table('categories')->insert([
        	'id' => 2,
            'title' => 'Male',
            'slug' => 'male'
        	]);
       	DB::table('categories')->insert([
        	'id' => 3,
            'title' => 'Mixed',
            'slug' => 'mixed'
        	]);
    }
}
