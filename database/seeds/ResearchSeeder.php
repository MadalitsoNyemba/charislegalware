<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;

class ResearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_research')->insert([
            'judge' => Str::random(10),
            'case_number' => Str::random(10),
            'case_title' => Str::random(10),

        ]);
        DB::table('tbl_research')->insert([
            'judge' => Str::random(10),
            'case_number' => Str::random(10),
            'case_title' => Str::random(10),

        ]);
        DB::table('tbl_research')->insert([
            'judge' => Str::random(10),
            'case_number' => Str::random(10),
            'case_title' => Str::random(10),

        ]);
        DB::table('tbl_research')->insert([
            'judge' => Str::random(10),
            'case_number' => Str::random(10),
            'case_title' => Str::random(10),

        ]);
        DB::table('tbl_research')->insert([
            'judge' => Str::random(10),
            'case_number' => Str::random(10),
            'case_title' => Str::random(10),

        ]);
    }
}
