<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\str;
use Illuminate\Support\Facades\Hash;

class BillingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_billing')->insert([
            'activity_name' => Str::random(10),
            'duration' => 3,
            'VAT' => 16.5,
            'levy' => 1,
            'case_id' => 1,
        ]);
        DB::table('tbl_billing')->insert([
            'activity_name' => Str::random(10),
            'duration' => 4,
            'VAT' => 16.5,
            'levy' => 1,
            'case_id' => 1,
        ]);
    }
}
