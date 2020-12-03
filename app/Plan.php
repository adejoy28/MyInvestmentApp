<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}
