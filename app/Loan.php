<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $guarded = [];
    protected $appends = ['overdue'];

    public function getActiveLoansAttribute()
    {
        return self::where('has_completed_repayment',0)->get();
    }

    public function getInactiveLoansAttribute()
    {
       self::where('has_completed_repayment',1)->get();
    }

    public function user()
    {
     return $this->belongsTo(User::class);
    }

    public function getOverdueAttribute()
    {
      return $this->where('approved_date','<=',Carbon::now()->subDays(30));
    }



}
