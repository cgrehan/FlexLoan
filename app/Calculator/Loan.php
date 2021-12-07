<?php

namespace App\Calculator;

use App\User;
use App\UserCreditScore;
use Carbon\Carbon;

class Loan
{
    protected $user;

    function __construct($user_id){
     $this->user = User::find($user_id);
    }

    // return interest rate within the amount range
    function interestRate($amount_qualified)
    {
        $rates = \App\Interest::all();
        foreach ($rates as $rate) {
            if ($amount_qualified >= $rate->range_from && $amount_qualified <= $rate->range_to){
                return $rate->interest_rate;
            }
                return $rate->interest_rate;
        }

        return 0;
    }

    //return total repayment amount inclusive of interest rate.
    function repaymentAmount($amount_qualified){
        if ($this->interestRate($amount_qualified)==0)
            return $amount_qualified;

      return $amount_qualified + $this->interestRate($amount_qualified)/100 * $amount_qualified;
    }

    //negative credit score
    function downgradeCreditScore(){
     if ($this->user->active_loan && is_object($this->user->active_loan)){
         $dueDate = Carbon::parse($this->user->active_loan->due_date);
         $nowDate = Carbon::now();

         //check if due date has elapsed.
        if ($nowDate->gt($dueDate)){
            //Check if credit score duration(days) is less than days elapsed the downgrade credit score
            if ($this->user->detail->score->duration < $this->user->days_elapsed){
                $new_score_id = '';
                switch ($this->user->deatil->score->points){
                    case 1:
                    case 2:
                        $new_score_id = 6;
                        break;
                    default:
                        $new_score_id = 5;
                }
                $this->user->detail->update(['credit_score_id'=>$new_score_id]);
                UserCreditScore::create(['user_id'=>$this->user->id,'credit_score_id'=>$new_score_id]);
            }
        }
     }
    }

    //positive credit score
    function upgradeCreditScore(){
        if ($this->user->latest_completed && is_object($this->user->latest_completed)){
            dd($this->user);
            $dueDate = Carbon::parse($this->user->active_loan->due_date);
            $repaidDate = Carbon::parse($this->user->latest_completed->updated_at);
            $approved_date = Carbon::parse($this->user->latest_completed->approved_date);
            $nowDate = Carbon::now();

            //check if the loan repayments was done on or before the due date
            if ($approved_date->diffInDays($repaidDate) <= $approved_date->diffInDays($dueDate)) {
                //check if credit score duration(days) is greater than or equal to duration from the approved loan date.
                if ($approved_date->diffInDays($nowDate) >= $this->user->detail->score->duration ) {
                    $new_score_id = '';
                    switch ($this->user->detail->score->points) {
                        case 5:
                        case 6:
                            $new_score_id = 1;
                            break;
                        case 4:
                            $new_score_id = 2;
                            break;
                        case 3:
                            $new_score_id = 3;
                            break;
                        case 2:
                            $new_score_id= 4;
                            break;
                        default:
                            $new_score_id = 5;
                    }

                    $this->user->detail->update(['credit_score_id' => $new_score_id]);
                    UserCreditScore::create(['user_id'=>$this->user->id,'credit_score_id'=>$new_score_id]);
                }
            }
        }
    }

}
