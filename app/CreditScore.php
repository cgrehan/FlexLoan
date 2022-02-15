<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditScore extends Model
{
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(CreditScoreType::class,'credit_score_type_id');
    }
}
