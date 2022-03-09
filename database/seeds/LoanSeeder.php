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
        $user1 = \App\User::first();
        $user2 = \App\User::find(2);

        $loan1 = \App\Loan::create(['reason'=>'Emergency','loan_amount'=>5000,'approved_date'=>\Carbon\Carbon::now(),'due_date'=>\Carbon\Carbon::now()->addDays(30),'interest_rate'=>get_option("interest_rate"),
                   'amount_paid_todate' =>0,'user_id'=>$user1->id,'loan_type_id'=>1,'loan_status'=>'Active']);
        $model1 = new \App\Calculator\Interest($loan1);
        $loan1->update(['repayment_amount'=>$model1->amountRepaid()]);

        $loan2 = \App\Loan::create(['reason'=>'Urgent','loan_amount'=>10000,'interest_rate'=>get_option("interest_rate"),
            'amount_paid_todate' =>0,'user_id'=>$user2->id,'loan_type_id'=>1]);

        $model2 = new \App\Calculator\Interest($loan2);
        $loan2->update(['repayment_amount'=>$model2->amountRepaid()]);
    }
}
