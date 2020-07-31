<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ResearchSeeder::class);
        $this->call(LawsOfMalawiSeeder::class);
        $this->call(FormsAndPrecedentsSeeder::class);
        $this->call(CasesSeeder::class);
        $this->call(CaseDocumentSeeder::class);
        $this->call(UserCasesSeeder::class);
        $this->call(BillingSeeder::class);
    }
}
