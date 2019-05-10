<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
	{
		$todos = Todo::all();
		return view('todos')->with('todos', $todos);
	}

	public function store(Request $request)
	{
		// membuat new instance
		$todo = new Todo;
		// assign into column
		$todo->todo = $request->todo;
		// save it
		$todo->save();
		// redirect user
		return redirect()->back();
	}

	public function delete($id)
	{
		$todo = Todo::find($id);
		$todo->delete();
		return redirect()->back();
	}

	public function update($id)
	{
		$todo = Todo::find($id);
		return view('edit')->with('todo', $todo);
	}

	public function save(Request $request, $id)
	{
		$todo = Todo::find($id);
		$todo->todo = $request->todo;
		$todo->save();
		return redirect()->route('home');
	}

	public function completed($id)
	{
		$todo = Todo::find($id);
		$todo->completed = 1;
		$todo->save();
		return redirect()->back();
	}
}
