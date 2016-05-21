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
        	'title' => 'Female',
        	]);
       	DB::table('categories')->insert([
        	'title' => 'Male',
        	]);
       	DB::table('categories')->insert([
        	'title' => 'Mixed',
        	]);
    }
}
