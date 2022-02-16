<?php

use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = \App\UserCreditScore::first();
        $user2 = \App\UserCreditScore::find(2);
        $user1_calculator = new \App\Calculator\Loan($user1->id);
        $user2_calculator = new \App\Calculator\Loan($user2->id);

        \App\Loan::create(['reason'=>'Emergency','loan_amount'=>$user1->total_score_value,'due_date'=>'2021-11-30','approved_date'=>'2021-11-01','interest_rate'=>$user1_calculator->interestRate($user1->total_score_value),
            'repayment_amount'=>$user1_calculator->repaymentAmount($user1->total_score_value),
            'amount_paid_todate' =>0,'user_id'=>$user1->user_id,'loan_type_id'=>1]);
        \App\Loan::create(['reason'=>'Argent','loan_amount'=>$user2->total_score_value,'due_date'=>'2021-10-30','approved_date'=>'2021-01-01','interest_rate'=>$user2_calculator->interestRate($user2->total_score_value),'repayment_amount'=>$user2_calculator->repaymentAmount($user2->total_score_value),
            'amount_paid_todate' =>$user2_calculator->repaymentAmount($user2->total_score_value),'has_completed_repayment'=>1,'user_id'=>$user2->user_id,'loan_type_id'=>1]);

    }
}
