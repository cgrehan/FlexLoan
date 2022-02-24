<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $guarded = [];

    public function getActiveLoansAttrinbute()
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

}
