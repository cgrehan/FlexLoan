<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLoanDetail extends Model
{
    protected $guarded = [];

    public function score()
    {
        return $this->belongsTo(CreditScore::class,'credit_score_id');
    }
}
