<?php

use Illuminate\Database\Seeder;

class CreditScoreTypesSeeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CreditScoreType::create(['name' =>'Excellent']);
        \App\CreditScoreType::create(['name' =>'Very Good']);
        \App\CreditScoreType::create(['name' =>'Good']);
        \App\CreditScoreType::create(['name' =>'Bad']);
        \App\CreditScoreType::create(['name' =>'Very Bad']);
        \App\CreditScoreType::create(['name' =>'Starting']);
    }
}
