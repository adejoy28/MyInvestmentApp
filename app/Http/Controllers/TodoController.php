<?php

namespace App\Http\Controllers;

Use App\Todo;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TodoCreateRequest;



class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index() 
    {
        // $todos = Todo::orderBy('completed')->get();
        $todos = auth()->user()->todos->sortBy('completed');
        return view('todos.index')->with('todos', $todos);
    }
    public function create() 
    {
        # code...
        return view('todos.create');
    }
    public function edit(Todo $todo) 
    {
        # code...
        //return 'Edit: '.$id;
        // $todo = Todo::findorfail($id);

        // dd($todo->title);

        // return $todo->title;
        return view('todos.edit', compact('todo'));
    }
    public function store(TodoCreateRequest $request) 
    {
        # code...
            // $title = $request->todo;
            // echo "<h1>$title</h1>";
        // if(!isset($request->title)) {
        //     return redirect()->back()->with('error', 'Please provide title');
        // }
                // alternative to error checking is to use Laravel Validation
               
                // $request->validate([
                //     'title' => 'required|max:256',
                // ]);

                //with custom messages
                $rules = [
                    'title' => 'required|max:255',
                    'description' => 'required|min:5',
                ];
                $messages = [
                    'title.max' => 'Title characters may not be longer than 255',
                    'description.min' => 'Decription shouldn\'t be lesser than 5 chars',
                ];

                $validator = Validator::make($request->all(), $rules, $messages);
                if($validator->fails()) :
                    return redirect()->back()
                                            ->withErrors($validator)
                                            ->withInput();
                endif;

            // dd(auth()->user()->todos());
            auth()->user()->todos()->create($request->all());
            // Todo::create($request->all());
            return redirect()->back()->with('message', 'To-do registered successfully');
    }

    //Update Todo Title
    public function update(Request $request, Todo $todo)  
    {   
        // dd($request);
        // Todo::where('id', $todo->id)->update(['title' => $request->title]);
        if($todo->title !== null) {
            $todo->update(['title'=> $request->title,]);
            return 'Saved';
         }
        // dd($request->description);
        if($todo->description != null) {
            return 'not empty';
            $todo->update(['description' => $request->description]);
        } else {
            return 'Empty';
        }
        return redirect('/todos')->with('message', 'Update Success');

        // // dd($todo->title);
        // $todo_update = new Todo();
        // $data = [
        //     'id' => $request->id,
        //     'title' => $request->title,
        // ];
        
        // $todo_update = Todo::update(
        //     'title' => $request->title]);
        // // dd($request->all());
        //     return "Success";
    }
    public function completeTodo(Todo $todo)
    {   
        $todo->update(['completed' => true]);
        return redirect()->back()->with('message', 'Task Completed!');
    }
    public function notCompleteTodo(Todo $todo)
    {   
        $todo->update(['completed' => false]);
        return redirect()->back()->with('error', 'Task Incompleted');
    }

    public function destroy(Todo $todo)
    {   
        // dd($todo);
        Todo::where('id', $todo->id)->delete();
        return redirect()->back()->with('message', 'Task deleted');
        
    }
    public function show(Todo $todo)
    {
        // return $todo;
        return view('todos.eachtodo', compact('todo'));
    }
}

