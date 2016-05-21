<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
        	'title' => 'Cate Blanchett and Ian McKellen',
        	'description' => '',
        	'youtube_id' => 'ThpcJDToBow',
            'slug' => 'cateblanchettandianmckellen',
            'youtube_date' => '2015-12-12 02:26:14',
            'category_id' => '3'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Kate Winslet and Saoirse Ronan',
        	'description' => '',
        	'youtube_id' => 'NzyN5kcbusY',
            'slug' => 'katewinsletandsaoirseronan',
            'youtube_date' => '2015-12-16 21:30:56',
            'category_id' => '1'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Bryan Cranston and Jason Segel',
        	'description' => '',
        	'youtube_id' => 'ro9Vq2bnxJc',
            'slug' => 'bryancranstonandjasonsegel',
            'youtube_date' => '2015-12-12 01:15:40',
            'category_id' => '2'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Paul Dano and Joseph Gordon-Levitt',
        	'description' => '',
        	'youtube_id' => 'i__c7KjLgc0',
            'slug' => 'pauldanoandjosephgordonlevitt',
            'youtube_date' => '2015-12-16 21:30:57',
            'category_id' => '2'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Carey Mulligan and Elizabeth Banks',
        	'description' => '',
        	'youtube_id' => 'fNVYjH2CUGA',
            'slug' => 'careymulliganandelizabethbanks',
            'youtube_date' => '2015-12-16 21:30:56',
            'category_id' => '1'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Jessica Lange and Taylor Schilling',
        	'description' => '',
        	'youtube_id' => 'gxm_YHv0DqY',
            'slug' => 'jessicalangeandtaylorschilling',
            'youtube_date' => '2015-06-11 17:03:12',
            'category_id' => '1'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Lizzy Caplan and Allison Janney',
        	'description' => '',
        	'youtube_id' => 'k9fTiied5A0',
            'slug' => 'lizzycaplanandallisonjanney',
            'youtube_date' => '2015-06-11 16:17:37',
            'category_id' => '1'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Maggie Gyllenhaal and Liev Schreiber',
        	'description' => '',
        	'youtube_id' => 'QKRyJiVdG_A',
            'slug' => 'maggiegyllenhaalandlievschreiber',
            'youtube_date' => '2015-06-12 17:03:41',
            'category_id' => '3'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Julianna Marguiles and Clive Owen',
        	'description' => '',
        	'youtube_id' => 'dY_mSDiuJkU',
            'slug' => 'juliannamarguilesandcliveowen',
            'youtube_date' => '2015-06-09 17:09:10',
            'category_id' => '3'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Viola Davis and Jane Fonda',
        	'description' => '',
        	'youtube_id' => 'ECryBVVh-i4',
            'slug' => 'violadavisandjanefonda',
            'youtube_date' => '2015-06-08 20:53:41',
            'category_id' => '1'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Jamie Dornan and Michael Kelly',
        	'description' => '',
        	'youtube_id' => '3PwerGs2CrA',
            'slug' => 'jamiedornanandmichaelkelly',
            'youtube_date' => '2015-06-09 17:02:10',
            'category_id' => '2'
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Laura Dern and Eddie Redmayne',
        	'description' => '',
        	'youtube_id' => 'CEU3ksHJwWg',
            'slug' => 'lauradernandeddieredmayne',
            'youtube_date' => '2014-12-10 21:26:33',
            'category_id' => '3'
        	]);
    }
}
