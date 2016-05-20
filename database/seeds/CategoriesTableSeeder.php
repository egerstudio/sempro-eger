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
        	'title' => 'Laura Dern',
        	]);
       	DB::table('categories')->insert([
        	'title' => 'Maggie Gyllenhaal',
        	]);
       	DB::table('categories')->insert([
        	'title' => 'Eddie Redmayne',
        	]);
       	DB::table('categories')->insert([
        	'title' => 'Jane Fonda',
        	]);
    }
}
