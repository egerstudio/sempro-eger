<?php

use Illuminate\Database\Seeder;

class UsersTableSeeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@locahost',
            'password' => bcrypt('admin')
        ]);
    }
}
