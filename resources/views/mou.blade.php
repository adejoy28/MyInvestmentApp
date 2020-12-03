@extends('layouts.app')

@section('content')
<div class="table-responsive table-bordered">
    <table id="SortTable" class="table table-dark table-flush">
        <thead class="thead-dark">
            <tr>
                <th>Date Invested</th>
                <th>Acc Name</th>
                <th>Capital</th>
                <th>Status</th>
                <th>Period</th>
                <th>Date Due</th>
            </tr>
        </thead>
        <tbody class="">
            <tr>
                <td>{{$inv->date_invested}}</td>
                <td>{{$inv->acc_name}}</td>
                <td>$ {{number_format($inv->amount_invested,2,'.',',')}}</td>
                <td>{{$inv->status}}</td>
                <td>{{$inv->period}}</td>
                <td>{{$inv->date_due}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
