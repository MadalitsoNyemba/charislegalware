<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\str;
use Illuminate\Support\Facades\Hash;

class LawsOfMalawiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_laws_of_malawi')->insert([
            'act' => Str::random(10),
            'chapter' => 1,
            'volume' => 2,
            'document_name' => Str::random(10),
        ]);
        DB::table('tbl_laws_of_malawi')->insert([
            'act' => Str::random(10),
            'chapter' => 2,
            'volume' => 3,
            'document_name' => Str::random(10),
        ]);
        DB::table('tbl_laws_of_malawi')->insert([
            'act' => Str::random(10),
            'chapter' => 3,
            'volume' => 4,
            'document_name' => Str::random(10),
        ]);
        DB::table('tbl_laws_of_malawi')->insert([
            'act' => Str::random(10),
            'chapter' => 4,
            'volume' => 5,
            'document_name' => Str::random(10),
        ]);
    }
}
