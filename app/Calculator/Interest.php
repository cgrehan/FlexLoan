<?php

namespace App\Calculator;

use App\InterestType;
use Carbon\Carbon;

class Interest
{
    public $loan;
    public $interest_type;

    public function __construct($loan)
    {
        $this->loan = $loan;
        $this->interest_type = InterestType::find($loan->interest_type_id);
    }

    public function interestAmount()
    {
       return ($this->loan->loan_amount * get_option("interest_rate"))/100;
    }

    public function amountRepaid()
    {
       return $this->interestAmount() + $this->loan->loan_amount;
    }

    public function hasWaiver()
    {
     if ($this->interest_type->name){

        if (str_contains(strtolower($this->interest_type->name),'waiver')){
            return true;
        }
     }
     return false;
    }

    public function hasRollover()
    {
        if ($this->loan->interest_type_id){

            if (str_contains(strtolower($this->interest_type->name),'roll')){
                return true;
            }
        }
        return false;
    }

    public function applyRollover()
    {
        $interest_type = InterestType::where('name','like','%roll%')->first();

        if ($interest_type && $this->loan->interest_type_id !==$interest_type->id){
            $this->loan->update(['interest_type_id'=>$interest_type->id]);
            return true;
        }
      return false;
    }

    public function isOverdue()
    {
        if ($this->loan->approved_date && Carbon::parse($this->loan->approved_date) > Carbon::now()->subDays(30))
            return true;
        return false;
    }

    public function isToStop()
    {
        if ($this->isOverdue() && Carbon::parse($this->loan->approved_date) == Carbon::now()->subDays(150)){
            return true;
        }
        return false;
    }

    public function isToWaiver()
    {
        if ($this->isOverdue() && Carbon::parse($this->loan->approved_date) == Carbon::now()->subDays(120)){
            return true;
        }
        return false;
    }

    public function applyStop()
    {
      return  $this->loan->update(['loan_status'=>'stopped']);
    }

    public function applyOverdue()
    {
        if ($this->loan->loan_status !=='overdue')
      return  $this->loan->update(['loan_status'=>'overdue']);
    }

    public function isFirstRolloverLoan()
    {
        if ($this->loan->approved_date){
            $cDate = Carbon::parse($this->loan->approved_date);
            if ($cDate->diffInDays() == 31 && !$this->hasWaiver()){
             return true;
            }
        }
        return false;
    }

     public function isSecondRolloverLoan()
        {
            if ($this->loan->approved_date){
                $cDate = Carbon::parse($this->loan->approved_date);
                if ($cDate->diffInDays() == 61 && !$this->hasWaiver()){
                 return true;
                }
            }
            return false;
      }

    public function applyRolloverInterest()
    {
      $amount = $this->loan->repayment_amount + $this->interestAmount();
      return  $this->loan->update(['repayment_amount'=>$amount]);
    }

    public function applyWaiver()
    {
        $interest_type = InterestType::where('name','like','%waiver%')->first();
        if ($interest_type)
           return $this->loan->update(['interest_type_id'=>$interest_type->id]);
    }

    public function applyComplete()
    {
        return  $this->loan->update(['loan_status'=>'complete']);
    }

}
