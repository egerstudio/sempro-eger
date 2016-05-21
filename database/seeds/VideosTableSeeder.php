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
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Kate Winslet and Saoirse Ronan',
        	'description' => '',
        	'youtube_id' => 'NzyN5kcbusY',
            'slug' => 'katewinsletandsaoirseronan',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Bryan Cranston and Jason Segel',
        	'description' => '',
        	'youtube_id' => 'ro9Vq2bnxJc',
            'slug' => 'bryancranstonandjasonsegel',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Paul Dano and Joseph Gordon-Levitt',
        	'description' => '',
        	'youtube_id' => 'i__c7KjLgc0',
            'slug' => 'pauldanoandjosephgordonlevitt',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Carey Mulligan and Elizabeth Banks',
        	'description' => '',
        	'youtube_id' => 'fNVYjH2CUGA',
            'slug' => 'careymulliganandelizabethbanks',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Jessica Lange and Taylor Schilling',
        	'description' => '',
        	'youtube_id' => 'gxm_YHv0DqY',
            'slug' => 'jessicalangeandtaylorschilling',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Lizzy Caplan and Allison Janney',
        	'description' => '',
        	'youtube_id' => 'k9fTiied5A0',
            'slug' => 'lizzycaplanandallisonjanney',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Maggie Gyllenhaal and Liev Schreiber',
        	'description' => '',
        	'youtube_id' => 'QKRyJiVdG_A',
            'slug' => 'maggiegyllenhaalandlievschreiber',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Julianna marguiles and Clive Owen',
        	'description' => '',
        	'youtube_id' => 'dY_mSDiuJkU',
            'slug' => 'juliannamarguilesandcliveowen',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Viola Davis and Jane Fonda',
        	'description' => '',
        	'youtube_id' => 'ECryBVVh-i4',
            'slug' => 'violadavisandjanefonda',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Jamie Dornan and Michael Kelly',
        	'description' => '',
        	'youtube_id' => '3PwerGs2CrA',
            'slug' => 'jamiedornanandmichaelkelly',
            'youtube_date' => ''
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Laura Dern and Eddie Redmayne',
        	'description' => '',
        	'youtube_id' => 'CEU3ksHJwWg',
            'slug' => 'lauradernandeddieredmayne',
            'youtube_date' => ''
        	]);
    }
}
