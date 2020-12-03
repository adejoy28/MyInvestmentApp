@extends('layouts.dash')

@section('page_title')
    New
@endsection
@section('content')
<div class="row">
   
    <div class="col-md-6 content"> 
    <div>
        <h2 class="text-center">Investment Form</h2>
    </div>
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        <form action="{{route('pay')}}" method="post" class='form' accept-charset="UTF-8" class="form-horizontal" role="form">
            @csrf

            <input type="hidden" name="email" id="name" class="form-control" value="{{auth()->user()->email}}"> <br/>
            <label for="amt">Amount</label>
            <input type="number" name="amt" placeholder="100,000.00" class="form-control" id="amt" value="100"><br/>
            <input type="hidden" name="amount" value="document.querySelector('#amt').value * 100" id="amount"><br/>
            <label for="period">Period</label>
            <select name="period" class="form-control" id="period" placeholder='Select Investment Period'>
                    <!-- <option>Select Investment Period</option> -->
                @for ($i=1; $i<=12; $i++)
                    <option value="{{$i*33}}">{{25*$i." Working Days"}}</option>
                @endfor
                <!-- @foreach ($plans as $plan) -->
                    <!-- <option value="{{--$plan->id--}}">{{--$plan->plan .' ('.$plan->percent.'%)'--}}</option> -->
                @endforeach -->
            </select><br/>
            <label for="acct_name">Account Name</label>
            <input type="text" name="acc_name" id="name" class="form-control" placeholder="Name Here..."><br/>
            <label for="acc_no">Account Number</label>
            <input type="number" name="acc_no" class="form-control" placeholder="0101010101" id="amt"><br/>
            <Label for="bank_name">Bank Name</Label>
            <input type="text" name="bank" value="Gtbank" class="form-control" id="name" placeholder="Bank name Here..."><br/>
            <!-- <label for="dateInv">Date Invested</label>
            <input type="date" name="dateInv" class="form-control" id="dateInv"> -->
            <input type="hidden" name="id" value="{{auth()->user()->id}}">
            <!-- <input type="hidden" name="quantity" value="1"> -->
            <input type="hidden" name="currency" value="NGN">
            <!-- <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}} -->
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="submit" class="btn btn-info" class="form-control" value="Submit">

        </form>
    </div>

 <script>
 jQuery().ready(function () {
     $( "#amt" ).keyup(function() {
        var text = $( this ).val() * 100;
        $( "#amount" ).val( text );
    });
 });
</script>
</div>
@endsection
