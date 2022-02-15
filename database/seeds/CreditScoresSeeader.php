<?php

use Illuminate\Database\Seeder;

class CreditScoresSeeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CreditScore::create(['amount_qualified' => 30000,'credit_score_type_id' =>1,'duration' =>120,'points'=>6]);
        \App\CreditScore::create(['amount_qualified' => 20000,'credit_score_type_id' =>2,'duration'=>30,'points'=>5]);
        \App\CreditScore::create(['amount_qualified' => 10000,'credit_score_type_id' =>3,'duration'=>14,'points'=>4]);
        \App\CreditScore::create(['amount_qualified' => 5000,'credit_score_type_id' =>4,'duration'=>7,'points'=>3]);
        \App\CreditScore::create(['amount_qualified' => 2000,'credit_score_type_id' =>5,'duration'=>60,'points'=>2]);
        \App\CreditScore::create(['amount_qualified' => 1000,'credit_score_type_id' =>6,'duration'=>90,'points'=>1]);
    }
}
