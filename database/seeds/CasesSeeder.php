<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;
class CasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_cases')->insert([
            'name' => Str::random(10),
            'user_id' => 2,
        ]);
        DB::table('tbl_cases')->insert([
            'name' => Str::random(10),
            'user_id' => 2,
        ]);
    }
}
