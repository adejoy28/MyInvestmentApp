@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>{{ $todo->title }}</h4>
                    <a href="/todos/" class="btn btn-light border-1">Back</a>
                    <a href="{{ route('todos.edit', $todo)}}" class="btn btn-light border-1">Edit</a>
                </div>
                <div class="card-body">
                    <p class="text">{{ $todo->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection