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
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/ThpcJDToBow/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Kate Winslet and Saoirse Ronan',
        	'description' => '',
        	'youtube_id' => 'NzyN5kcbusY',
            'slug' => 'katewinsletandsaoirseronan',
            'youtube_date' => '2015-12-16 21:30:56',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/NzyN5kcbusY/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Bryan Cranston and Jason Segel',
        	'description' => '',
        	'youtube_id' => 'ro9Vq2bnxJc',
            'slug' => 'bryancranstonandjasonsegel',
            'youtube_date' => '2015-12-12 01:15:40',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/ro9Vq2bnxJc/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Paul Dano and Joseph Gordon-Levitt',
        	'description' => '',
        	'youtube_id' => 'i__c7KjLgc0',
            'slug' => 'pauldanoandjosephgordonlevitt',
            'youtube_date' => '2015-12-16 21:30:57',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/i__c7KjLgc0/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Carey Mulligan and Elizabeth Banks',
        	'description' => '',
        	'youtube_id' => 'fNVYjH2CUGA',
            'slug' => 'careymulliganandelizabethbanks',
            'youtube_date' => '2015-12-16 21:30:56',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/fNVYjH2CUGA/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Jessica Lange and Taylor Schilling',
        	'description' => '',
        	'youtube_id' => 'gxm_YHv0DqY',
            'slug' => 'jessicalangeandtaylorschilling',
            'youtube_date' => '2015-06-11 17:03:12',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/gxm_YHv0DqY/maxresdefault.jpg',
            'featured' => '1',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Lizzy Caplan and Allison Janney',
        	'description' => '',
        	'youtube_id' => 'k9fTiied5A0',
            'slug' => 'lizzycaplanandallisonjanney',
            'youtube_date' => '2015-06-11 16:17:37',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/k9fTiied5A0/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Maggie Gyllenhaal and Liev Schreiber',
        	'description' => '',
        	'youtube_id' => 'QKRyJiVdG_A',
            'slug' => 'maggiegyllenhaalandlievschreiber',
            'youtube_date' => '2015-06-12 17:03:41',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/QKRyJiVdG_A/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Julianna Marguiles and Clive Owen',
        	'description' => '',
        	'youtube_id' => 'dY_mSDiuJkU',
            'slug' => 'juliannamarguilesandcliveowen',
            'youtube_date' => '2015-06-09 17:09:10',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/dY_mSDiuJkU/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Viola Davis and Jane Fonda',
        	'description' => '',
        	'youtube_id' => 'ECryBVVh-i4',
            'slug' => 'violadavisandjanefonda',
            'youtube_date' => '2015-06-08 20:53:41',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/ECryBVVh-i4/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Jamie Dornan and Michael Kelly',
        	'description' => '',
        	'youtube_id' => '3PwerGs2CrA',
            'slug' => 'jamiedornanandmichaelkelly',
            'youtube_date' => '2015-06-09 17:02:10',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/3PwerGs2CrA/maxresdefault.jpg',
            'featured' => '0',
        	]);
       	DB::table('videos')->insert([
        	'title' => 'Laura Dern and Eddie Redmayne',
        	'description' => '',
        	'youtube_id' => 'CEU3ksHJwWg',
            'slug' => 'lauradernandeddieredmayne',
            'youtube_date' => '2014-12-10 21:26:33',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/CEU3ksHJwWg/maxresdefault.jpg',
            'featured' => '0',
        	]);
        DB::table('videos')->insert([
            'title' => 'Seth Rogen & Jennifer Jason Leigh',
            'description' => '',
            'youtube_id' => 'gY437bnUOYI',
            'slug' => 'seth-rogen-jennifer-jason-leigh',
            'youtube_date' => '2015-12-12 17:00:00',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/gY437bnUOYI/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Will Smith & Benicio Del Toro',
            'description' => '',
            'youtube_id' => '13TznUfhdgc',
            'slug' => 'will-smith-benicio-del-toro',
            'youtube_date' => '2015-12-11 14:00:00',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/13TznUfhdgc/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Brie Larson and Joel Edgerton',
            'description' => '',
            'youtube_id' => 'ifPSRpEuNSI',
            'slug' => 'brie-larson-joel-edgerton',
            'youtube_date' => '2015-12-16 14:00:00',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/ifPSRpEuNSI/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => ' Charlotte Rampling and Isabella Rossellini',
            'description' => '',
            'youtube_id' => '7ldaV0SNHKU',
            'slug' => 'charlotte-rampling-isabella-rossellini',
            'youtube_date' => '2015-12-12 02:30:58',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/7ldaV0SNHKU/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Amy Schumer and Lily Tomlin',
            'description' => '',
            'youtube_id' => 'v9H9U0die-Y',
            'slug' => 'amy-schumer-lily-tomlin',
            'youtube_date' => '2015-12-12 02:25:29',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/v9H9U0die-Y/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Steve Carell and Rooney Mara',
            'description' => '',
            'youtube_id' => 'Lk4fQLLs-tA',
            'slug' => 'steve-carell-and-rooney-mara',
            'youtube_date' => '2015-12-12 01:15:40',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/Lk4fQLLs-tA/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Ralph Fiennes and Christoph Waltz',
            'description' => '',
            'youtube_id' => 'zU_m1QTfSXk',
            'slug' => 'ralph-fiennes-and-christoph-waltz',
            'youtube_date' => '2015-12-01 20:35:07',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/zU_m1QTfSXk/hqdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Samuel L. Jackson and Michael Keaton',
            'description' => '',
            'youtube_id' => 'BmMoaayC9_s',
            'slug' => 'samuel-l-jackson-and-michael-keaton',
            'youtube_date' => '2015-12-12 01:15:40',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/BmMoaayC9_s/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Jessica Chastain and Mark Ruffalo',
            'description' => '',
            'youtube_id' => 'DyRTYrmllYg',
            'slug' => 'jessica-chastain-and-mark-ruffalo',
            'youtube_date' => '2014-12-10 21:31:31',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/DyRTYrmllYg/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Patricia Arquette and Jake Gyllenhaal',
            'description' => '',
            'youtube_id' => 'K0RKNNjT5Ho',
            'slug' => 'patricia-arquette-and-jake-gyllenhaal',
            'youtube_date' => '2014-12-10 22:02:57',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/K0RKNNjT5Ho/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Josh Brolin and J.K. Simmons',
            'description' => '',
            'youtube_id' => 'WFLR_25lP2k',
            'slug' => 'josh-brolin-and-j-k-simmons',
            'youtube_date' => '2014-12-10 21:25:20',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/WFLR_25lP2k/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Kevin Costner and James Gorden',
            'description' => '',
            'youtube_id' => 'I93rYkeNh4w',
            'slug' => 'kevin-costner-and-james-gorden',
            'youtube_date' => '2014-12-10 21:32:57',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/I93rYkeNh4w/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Jennifer Aniston and Emily Blunt',
            'description' => '',
            'youtube_id' => 'sLWdAepwN8w',
            'slug' => 'jennifer-aniston-and-emily-blunt',
            'youtube_date' => '2014-12-15 19:35:52',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/sLWdAepwN8w/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Ethan Hawke and Kiera Knightley',
            'description' => '',
            'youtube_id' => '5dzHRHaDgwc',
            'slug' => 'ethan-hawke-and-kiera-knightley',
            'youtube_date' => '2014-12-11 01:03:08',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/5dzHRHaDgwc/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Felicity Jones and Jenny Slate',
            'description' => '',
            'youtube_id' => 'KPYCxRWp2sM',
            'slug' => 'felicity-jones-and-jenny-slate',
            'youtube_date' => '2014-12-10 21:28:05',
            'category_id' => '1',
            'youtube_image' => 'https://i.ytimg.com/vi/KPYCxRWp2sM/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Oscar Isaac and Gugu Mbatha-Raw',
            'description' => '',
            'youtube_id' => 'EqxqBWDCixs',
            'slug' => 'oscar-isaac-and-gugu-mbatha-raw',
            'youtube_date' => '2014-12-11 01:01:11',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/EqxqBWDCixs/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Chadwick Boseman and Logan Lerman',
            'description' => '',
            'youtube_id' => 'K0I3MlcG9vs',
            'slug' => 'chadwick-boseman-and-logan-lerman',
            'youtube_date' => '2014-12-15 19:37:17',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/K0I3MlcG9vs/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Julia Louis-Dreyfus and Jeffrey Tambor',
            'description' => '',
            'youtube_id' => '6-9ZLfEQDVo',
            'slug' => 'julia-louis-dreyfus-and-jeffrey-tambor',
            'youtube_date' => '2015-06-09 19:08:31',
            'category_id' => '3',
            'youtube_image' => 'https://i.ytimg.com/vi/6-9ZLfEQDVo/maxresdefault.jpg',
            'featured' => '0',
            ]);
        DB::table('videos')->insert([
            'title' => 'Michael Sheen and Bob Odenkirk',
            'description' => '',
            'youtube_id' => 'o1awAxUsCoc',
            'slug' => 'michael-sheen-and-bob-odenkirk',
            'youtube_date' => '2015-06-03 19:00:16',
            'category_id' => '2',
            'youtube_image' => 'https://i.ytimg.com/vi/o1awAxUsCoc/maxresdefault.jpg',
            'featured' => '0',
            ]);
    }
}
