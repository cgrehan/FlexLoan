<?php

use Illuminate\Database\Seeder;

class LoanTypesSeeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LoanType::create(['name' =>'Business Loan']);
        \App\LoanType::create(['name' =>'Salary Advance Loan']);
        \App\LoanType::create(['name' =>'Emergency Loan']);
    }
}
