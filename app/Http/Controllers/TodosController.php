<?php

namespace App\Http\Controllers;

use Illuminate\todo;

class TodosController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);
    }
}
