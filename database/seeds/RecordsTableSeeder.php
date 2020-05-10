<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'team_id' => 1,
            'member1' => 70000,
            'member2' => 10000,
            'member3' => 10000,
            'member4' => 10000,
        ]);

        DB::table('records')->insert([
            'team_id' => 1,
            'member1' => 40000,
            'member2' => 30000,
            'member3' => 20000,
            'member4' => 10000,
        ]);

        DB::table('records')->insert([
            'team_id' => 2,
            'member1' => 85000,
            'member2' => 10000,
            'member3' => 10000,
        ]);

        DB::table('records')->insert([
            'team_id' => 3,
            'member1' => 85000,
            'member2' => 10000,
            'member3' => 10000,
        ]);

        DB::table('records')->insert([
            'team_id' => 3,
            'member1' => 85000,
            'member2' => 10000,
            'member3' => 10000,
        ]);
    }
}
