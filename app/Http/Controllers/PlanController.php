<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //
    public function insert($name,$percent)
    {
    }

    public function show()
    {
        $plans = Plan::where();

        foreach ($plans as $plan) {
            echo "$plan->id. $plan->plan ($plan->percent%)<br>";
        }
    }
}
