<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
   public function index(){


        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create(){

        return view('todos.create');
    }

    public function store(Request $request){

        $this->validate($request,[
        'name' => 'required|min:6|max:20',
        'description' => 'required'
        ]);

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description =$data['description'];
        $todo->completed = false;

        $todo->save();
        session()->flash('success',  'Todo created successfully');
        return redirect('/todos');
    }

    public function show($id){

        $todo = Todo::find($id);
        return view('todos.show', compact('todo'));


    }
    public function edit($id){

        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }
    public function update(Request $request, $id){

        $this->validate($request,[
        'name' => 'required|min:6|max:20',
        'description' => 'required'
        ]);
         
        $todo = Todo::find($id);

        $todo->name = $request->name;
        $todo->description = $request->description;
        
        $todo->save();
        session()->flash('success',  'Todo updated successfully');
        return redirect('/todos');
    }

    public function destory($id){

        $todo = Todo::find($id);
        $todo->delete();
        session()->flash('success',  'Todo deleted successfully');
        return redirect('/todos');
    }
    public function complete($id){

       $todo = Todo::find($id);
       $todo->completed = true;
       $todo->save();
      session()->flash('success',  'Todo completed successfully');
       return redirect('/todos');
    }
}
