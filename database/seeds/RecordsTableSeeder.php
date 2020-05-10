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
            'tobi1' => 0,
            'tobi2' => 0,
            'tobi3' => 0,
            'tobi4' => 0,
            'rank1' => 1,
            'rank2' => 2,
            'rank3' => 3,
            'rank4' => 4,
            'point1' => 80,
            'point2' => -10,
            'point3' => -30,
            'point4' => -40,
        ]);

        DB::table('records')->insert([
            'team_id' => 1,
            'member1' => 40000,
            'member2' => 30000,
            'member3' => 20000,
            'member4' => 10000,
            'tobi1' => 0,
            'tobi2' => 0,
            'tobi3' => 0,
            'tobi4' => 0,
            'rank1' => 1,
            'rank2' => 2,
            'rank3' => 3,
            'rank4' => 4,
            'point1' => 50,
            'point2' => 10,
            'point3' => -20,
            'point4' => -40,
        ]);

        DB::table('records')->insert([
            'team_id' => 1,
            'member1' => 90000,
            'member2' => 40000,
            'member3' => -20000,
            'member4' => -10000,
            'tobi1' => 0,
            'tobi2' => 1,
            'tobi3' => -1,
            'tobi4' => -1,
            'rank1' => 1,
            'rank2' => 2,
            'rank3' => 4,
            'rank4' => 3,
            'point1' => 100,
            'point2' => 40,
            'point3' => -80,
            'point4' => -60,
        ]);

        // DB::table('records')->insert([
        //     'team_id' => 2,
        //     'member1' => 85000,
        //     'member2' => 10000,
        //     'member3' => 10000,
        // ]);

        // DB::table('records')->insert([
        //     'team_id' => 3,
        //     'member1' => 85000,
        //     'member2' => 10000,
        //     'member3' => 10000,
        // ]);

        // DB::table('records')->insert([
        //     'team_id' => 3,
        //     'member1' => 85000,
        //     'member2' => 10000,
        //     'member3' => 10000,
        // ]);
    }
}
