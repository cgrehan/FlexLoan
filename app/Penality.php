<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penality extends Model
{
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(PenalityType::class,'penality_type_id');
    }
}
