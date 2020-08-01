<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;

class FormsAndPrecedentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_forms_and_precedents')->insert([
            'title' => Str::random(10),
            'type' => 'court',
        ]);
        DB::table('tbl_forms_and_precedents')->insert([
            'title' => Str::random(10),
            'type' => 'transaction',
        ]);
        DB::table('tbl_forms_and_precedents')->insert([
            'title' => Str::random(10),
            'type' => 'court',
        ]);
        DB::table('tbl_forms_and_precedents')->insert([
            'title' => Str::random(10),
            'type' => 'court',
        ]);
        DB::table('tbl_forms_and_precedents')->insert([
            'title' => Str::random(10),
            'type' => 'transaction',
        ]);
    }
}
