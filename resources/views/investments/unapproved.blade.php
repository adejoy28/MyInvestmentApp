@extends('layouts.dash')

@section('content')
    <H1>Unapproved Investments</H1>
    <div class="content">
        <H1>This is the main Completed</H1>

    <table class="table table-stripe bordered table-condensed">
        <tr>
            <th>Capital</th>
            <th>Status</th>
            <th>MOU</th>
        </tr>
    @forelse ($invs as $inv)
        <tr>
            <td>{{$inv->amount_invested}}</td>
            <td>{{$inv->status}}</td>
            <td><a href="#">Generate</a></td>
            <td><a href="{{ route('deleteSingleInvestment', $inv->id)}}">{{$inv->id}}Delete</a></td>
        </tr>
    @empty
        <p>No investment record found</p>
    @endforelse
    </table>
    </div>
@endsection