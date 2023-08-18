<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todo =  Todo::all();
        return json_decode($todo);
    }

    public function store(Request $request)
    {
         Todo::create(['todos' => $request->newTodo]);
        $todo =  Todo::all();
        return json_decode($todo);

    }

    public function destroy($id)
    {
         Todo::destroy($id);
        $todo =  Todo::all();
        return json_decode($todo);
    }
}
