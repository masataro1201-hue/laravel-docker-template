<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo(); //Todoクラスのインスタンス化
        $todos = $todo->all();
        return view('todo.index', ['test' => $todos]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request) //メソッドインジェクション
    {
        $inputs = $request->all();

        $todo = new Todo();
        $todo->fill($inputs);
        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        $model = new Todo();
        $todo = $model->find($id);
        return view('todo.show', ['todo' => $todo]);
    }
}
