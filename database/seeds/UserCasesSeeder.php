<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\str;
use Illuminate\Support\Facades\Hash;

class UserCasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_user_cases')->insert([
            'user_id' => 2,
            'case_id' => 1,
        ]);
        DB::table('tbl_user_cases')->insert([
            'user_id' => 2,
            'case_id' => 2,
        ]);
    }
}
