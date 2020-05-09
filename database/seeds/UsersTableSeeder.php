<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => "Test1",
            'email' => "test1@test.com",
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => "Test2",
            'email' => "test2@test.com",
            'password' => bcrypt('password2'),
        ]);
    }
}
