<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'user_id' => 1,
            'name' => "Testers4",
            'count' => 4,
            'member1' => "A",
            'member2' => "B",
            'member3' => "C",
            'member4' => "D",
            'uma14' => 20,
            'uma23' => 10,
            'tobi' => 10,
            'points' => 25000,
            'returns' => 30000,
            'rate' => 5,
        ]);

        DB::table('teams')->insert([
            'user_id' => 1,
            'name' => "Testers3",
            'count' => 3,
            'member1' => "A",
            'member2' => "B",
            'member3' => "C",
            'uma14' => 10,
            'uma23' => 0,
            'tobi' => 10,
            'points' => 35000,
            'returns' => 40000,
            'rate' => 5,
        ]);

        DB::table('teams')->insert([
            'user_id' => 2,
            'name' => "Testers23",
            'count' => 3,
            'member1' => "A",
            'member2' => "B",
            'member3' => "C",
            'uma14' => 10,
            'uma23' => 0,
            'tobi' => 10,
            'points' => 35000,
            'returns' => 40000,
            'rate' => 5,
        ]);
    }
}
