<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'image' => 'a.jpg',
            'address' => Str::random(20),
            'phone_number' => '+26599999999',
            'firm_bank_details' => Str::random(80),
            'billing_rate' => 0,
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'image' => 'b.jpg',
            'address' => Str::random(20),
            'phone_number' => '+265888888',
            'firm_bank_details' => Str::random(80),
            'billing_rate' => 50,
            'role' => 'lawyer',
            'password' => Hash::make('password'),
        ]);

    }
}
