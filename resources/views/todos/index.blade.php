@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>{{ __('TODO') }}</h3>
                    <a href="/todos/create" class="btn btn-info py-1 font-bold">Create New</a>
                </div>

                <div class="card-body">
                    <x-alert />
                    <ul>
                        @forelse ($todos as $todo)
                        <a href="{{ route('todos.show', $todo) }}" class="text-dark">
                            <li class="d-flex justify-content-between">
                                @if($todo->completed)
                                <p class="text-decoration-strike">{{ $todo->title }}
                                    <em>({{ $todo->description }})</em>
                                </p>
                                @else
                                <p>{{ $todo->title }} <em>({{ $todo->description }})</em>
                                </p>
                                @endif
                                <div class="text-align-center">
                                    @if(!$todo->completed)
                                    <a href="#"
                                        onclick="event.preventDefault();document.querySelector('form-complete-{{ $todo->id }}').submit();"
                                        class="btn btn-success">Completed</a>
                                    @else
                                    <a href="#"
                                        onclick="event.preventDefault();document.getElementById('form-not-complete-{{ $todo->id }}').submit();"
                                        class="btn btn-light">Incompleted</a>
                                    <!-- <a href="#" class="btn btn-light">Complete</a> -->
                                    @endif
                                    <!-- <a href="#" class="btn btn-success">Unmark</a> -->

                                    <form class="d-none" action="{{ route('todo.complete', $todo->id) }}"
                                        id="{{ 'form-complete-'.$todo->id }}" method="post">
                                        @csrf
                                        @method('put')
                                    </form>

                                    <form class="d-none" action="{{ route('todo.notcomplete', $todo->id) }}"
                                        id="{{ 'form-not-complete-'.$todo->id }}" method="post">
                                        @csrf
                                        @method('put')
                                    </form>
                                </div>
                                <div class="btn-group">
                                    <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('todos.destroy', $todo->id) }}" class="btn btn-dark">Delete</a>
                                </div>
                            </li>
                        </a>
                        @empty
                        <p>No task yet, please create one</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
