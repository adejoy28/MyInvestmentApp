@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>{{ __('Create New Todo') }}</h4>
                    <a href="/todos/" class="btn btn-light border-1">Back</a>
                </div>
                <div class="card-body">
                    <form action="/todos" method="post" class="form p-5" >
                        <x-alert alert-type="success"/>
                            @csrf
                            <div class="form-group-row">
                                <label for="t">What do you want to-do?</label>
                                <input type="text" class="form-control col-md-6 my-2" name="title">
                            </div>
                            <div class="form-group-row">
                                <label for="t">Description</label>
                                <textarea name="description" id="" class="form-control col-md-6 my-2 textarea" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group-row">    
                                <input type="submit" class="btn btn-info py-2 my-2">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection