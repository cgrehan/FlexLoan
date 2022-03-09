<?php

namespace App\Console\Commands;

use App\Calculator\Interest;
use App\Loan;
use Illuminate\Console\Command;

class LoanStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'loan:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run daily to check and update loan status.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      $loans = Loan::where("status",'approved')->where("loan_status",'<>','complete')->where('loan_status','<>','stopped')->get();

       foreach ($loans as $loan){
         $loanModel = new Interest($loan);

        //Loan overdue
         if ($loanModel->isOverdue()){
          $loanModel->applyOverdue();
         }

         //Apply Rollover
           if ($loanModel->hasRollover()){
             $loanModel->applyRollover();
           }

      // Check 1st & 2nd rollovers & apply interest.
       if ($loanModel->isFirstRolloverLoan() || $loanModel->isSecondRolloverLoan()){
           $loanModel->applyRolloverInterest();
       }

        //Loan Waiver
           if ($loanModel->isToWaiver()){
           $loanModel->applyWaiver();
           }

       //Loan to Stop
       if ($loanModel->isToStop()){
           $loanModel->applyStop();
       }
       }
        return 0;
    }
}
