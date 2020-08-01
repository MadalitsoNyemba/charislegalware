<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;

class CaseDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_case_documents')->insert([
            'name' => Str::random(10),
            'case_id' => 1,
        ]);
        DB::table('tbl_case_documents')->insert([
            'name' => Str::random(10),
            'case_id' => 1,
        ]);
        DB::table('tbl_case_documents')->insert([
            'name' => Str::random(10),
            'case_id' => 1,
        ]);
        DB::table('tbl_case_documents')->insert([
            'name' => Str::random(10),
            'case_id' => 2,
        ]);
    }
}
