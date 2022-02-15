<?php

namespace App\Console\Commands;

use App\Calculator\Loan;
use App\User;
use Illuminate\Console\Command;

class CreditScoreUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'score:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Downgrade or upgrade the credit respectively based on the duration given and loan repayment period';

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
        $users = User::all();
        foreach ($users as $user){
         $userModel = new Loan($user->id);
         $userModel->upgradeCreditScore();
         $userModel->downgradeCreditScore();
        }
        return 0;
    }
}
