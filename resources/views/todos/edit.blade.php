@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><div class="card-header d-flex justify-content-between">
                    <h3>{{ __('Update todo') }}</h3>
                    <a href="/todos/" class="btn btn-light border-1">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('todos.update',$todo->id)}}" method="post" class="form p-5">
                        <x-alert/>
                        @csrf
                        @method('patch')
                        <div class="form-group-row">
                            <label for="t">Update Title</label>
                            <input type="text" class="form-control col-md-6 my-2" value="{{ $todo->title }}" name="title">
                        </div>
                        <div class="form-group-row">
                            <label for="t">Update Description</label>
                            <textarea type="text" class="form-control col-md-6 my-2" name="description"></textarea>
                        </div>
                        <div class="form-group-row">    
                            <input type="submit" value="Update" class="btn btn-info py-2 my-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection