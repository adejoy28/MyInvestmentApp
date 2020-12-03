<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf; 
use App\Investment;
use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;

use PDF;

class InvestmentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    // protected $name = 'Beloved';

    protected function index()
    {
        /**
         * This is the default to fall back on
         */
        // $invs = Investment::all();        
        // $invs = Investment::where('user_id', 1)->get();
        // $user = $invs->user->name;
        // echo "<pre>";

        // $invs = auth()->find(1)->investments->sortBy('date_invested');
        $invs = Investment::all();//->sortBy('date_invested');
        $user = auth()->user();
        $plan = Plan::all();
        return view('investments.index')->with(['invs' => $invs,
                                                'user' => $user, 
                                                'plan' => $plan]);
    }

    public function completed()
    {   
        $invs = Investment::where('status', 1)->get();
        return view('investments.completed', compact('invs'));
    }
    public function new()
    {
        $plans = Plan::all();
        return view('investments.new')->with(['plans' => $plans]);
    }
    public function ongoing()
    {
        return view('investments.ongoing');
    }
    public function unapproved()
    {
        return view('investments.unapproved');
    }
    public function abandoned()
    {
        return view('investments.abandoned');
    }

    // Posting Request for Investments SIngles
    public function deleteInv($inv)
    {
        $gas = Investment::where('id', $inv)->delete();
        return redirect()->back();
    }
    public function edit($inv)
    {
        return "Recieved";
    }
    public function startInv(Request $req) 
    {   
        $req['dateInv'] = date("Y-m-d");
        $req['dateDue'] = date_format(date_add(date_create("now"),date_interval_create_from_date_string("$req->period days")),"Y-m-d");
        // dd($req->all());

        DB::table('investeds')->insert([
            'amount_invested' => $req->amt,
            'user_id' => $req->id,
            'period' => $req->period,
            'acc_name' => $req->acc_name,
            'date_invested' => $req->dateInv,
            'date_due' => $req->dateDue,
            'bank' => $req->bank,
            // 'plan_id' => 1,
            'acc_no' => $req->acc_no,
        ]);
        
        // $investments = Investment::where('plan_id', $req->period)->get();
        // $investments = $investments->plan_id;
        // dd($investments);
        // return $newInvest->date_due = dateAdd($date, $period);
        // $newInvest->save();


        return $this->index()->with('message', "Investment Successful");
        // return redirect()->back();
    }   
    
    public function prie()
    {
        // 
    }    
    
    public function generateMOU($id)
    {   
                setlocale(LC_MONETARY, 'en_US');

        $inv = Investment::findOrFail($id);
        // $inv = Investment::where('id', 1)->get();
        echo '<pre>';
var_dump($inv);

        $pdf = PDF::loadView('mou', compact('inv'));
        return view('mou')->with('inv', $inv);
        // dd('http://127.0.0.1:8000/mou');
        // dd($inv);
        // $inv = Investment::all();
        // view()->share('capital', $data);
            
        // $pdf = PDF::loadView('investments/pdfs/mou');
        //  $pdf = PDF::loadView('mou', compact('inv'));
        // return view('investments/pdfs/mou')->with('inv', $inv);
        // return $pdf->download('MoU.pdf');
        // return $pdf->stream();
    }
}
