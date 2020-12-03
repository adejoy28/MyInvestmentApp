<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    //
    protected $table = "investeds";
    protected $fillable = ['amount_invested', 'roi_percent', 'user_id', 'plan_id', 'acc_no', 'acc_name', 'bank'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }
    public function plan()
    {
        return $this->belongsTo("App\Plan");
    }
}
