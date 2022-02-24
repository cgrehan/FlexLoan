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
         $this->call(CreditScoreTypesSeeader::class);
         $this->call(SettingsSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(LoanTypesSeeader::class);
         $this->call(InterestTypesSeeader::class);
         $this->call(InterestSeeder::class);
         $this->call(LoanSeeder::class);
         $this->call(PenalityTypeSeeder::class);
         $this->call(PenalitySeeder::class);
         $this->call(RoleSeeder::class);
    }
}
