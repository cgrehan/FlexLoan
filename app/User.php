<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function detail()
    {
     return $this->hasOne(UserLoanDetail::class);
    }
    public function getHasActiveLoanAttribute()
    {
        $loans = $this->getLoan();
        if ($loans && is_object($loans))
            return true;
        return false;
    }

    public function getActiveLoanAttribute()
    {
       return Loan::where('user_id',$this->attributes['id'])->where('has_completed_repayment',0)->first();
    }

    public function getLoan()
    {
        return $this->getActiveLoanAttribute();
    }
    public function getDaysElapsedAttribute()
    {
        $date_approved = Carbon::parse($this->getLoan()->approved_date);
        $now = Carbon::now();
        return $date_approved->diffInDays($now);
    }

    public function getDaysRemainingAttribute()
    {
        $due_date = Carbon::parse($this->getLoan()->due_date);
        $now = Carbon::now();
        return $due_date->diffInDays($now);
    }

    public function getLatestCompletedAttribute()
    {
       return Loan::where('user_id',$this->attributes['id'])->where('has_completed_repayment',1)->first();
    }
}
