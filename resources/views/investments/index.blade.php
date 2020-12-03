@extends('layouts.dash')

@section('content')
<div class="content">
        <H1>This is All Investments</H1>

    <div class="table-responsive table-bordered" data-toggle="list" data-list-values='["inv_date", "capital", "status", "plan", "due_date"]'>
        @if ($invs->count() >= 1)
        <table id="SortTable" class="table table-dark table-flush">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="sort" data-sort="inv_date">Date Invested</th>
                <th scope="col" class="sort" data-sort="capital">Capital</th>
                <th scope="col" class="sort" data-sort="status">Status</th>
                <th scope="col" class="sort" data-sort="plan">Plan</th>
                <th scope="col" class="sort" data-sort="due_date">Date Due</th>
                <th>MOU</th>
                <th>Actions</th>
            </tr>
            </thead>
        @endif
        @forelse ($invs as $inv)
        <tbody class="list">
            <tr>
                <!-- <th scope="row">
                    1
                </th> -->
                <td class="inv_date">{{$inv->date_invested}}</td>
                <td class="capital">{{$inv->amount_invested}}</td>
                <!-- <td>{{$inv->status}}</td> -->
                <td class="status">
                    @if ($inv->status == 1)
                    <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i>
                    <span class="status">{{'pending'}}</span>
                        {{--'pending'--}}
                    @elseif ($inv->status == 2)
                    <span class="badge badge-dot mr-4">
                    <i class="bg-success"></i>
                    <span class="status">{{'approved'}}</span>
                        {{--'approved'--}}  
                    @else
                    <span class="badge badge-dot mr-4">
                    <i class="bg-danger"></i>
                    <span class="status">{{'disapproved'}}</span>
                        {{--'disapproved'--}}
                    @endif       
                </td>
                <td class="plan">
                    
                    @if ($inv->plan_id == 1)
                        {{'Biweekly'}}
                        {{'('}}{{$inv->roi_percent}}{{'%)'}}
                    @elseif ($inv->plan_id == 2)
                        {{'Monthly'}}
                        {{'('}}{{$inv->roi_percent}}{{'%)'}}
                    @else
                        {{'Annually'}}
                        {{'('}}{{$inv->roi_percent}}{{'%)'}}
                    @endif       
                </td>
                <td class="due_date">{{$inv->date_due}}</td>
                <td><a href="{{route('investment.mou', $inv->id)}}">Generate</a></td>
                <td class="text-center">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">        
                            <a href="{{ route('editSingleInvestment', $inv->id)}}">Edit</a>
                            <a href="{{ route('deleteSingleInvestment', $inv->id)}}">Delete</a>
                            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        @empty
            <p>No investment record found</p>
        @endforelse
        </table>
        </div>
    <!-- //{//{ $invs->links()}} -->
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
        $('#SortTable').DataTable();
        $('.dataTables_length').addClass('bs-select');
        });
    </script>
    

@endsection