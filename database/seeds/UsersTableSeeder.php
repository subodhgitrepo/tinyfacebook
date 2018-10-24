<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'subodh kalika',
            'email' => 's@s.com',
            'password' => bcrypt('subodh@kalika'),
        ]);
    }
}
