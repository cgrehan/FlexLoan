<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $guarded = [];

    public function type()
    {
     return $this->belongsTo(InterestType::class,'interest_type_id');
    }

    public function getRangeAttribute()
    {
        return 'abcd';
        return $this->range_from.' - '.$this->range_to;
    }
}
