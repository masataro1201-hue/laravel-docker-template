<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Todo;
use Facade\FlareClient\View;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo) //コンストラクタインジェクション
    {
        $this->todo = $todo;
    }

    public function index()
    {
        $todos = $this->todo->all();
        return view('todo.index', ['test' => $todos]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(TodoRequest $request) //メソッドインジェクション
    {
        $inputs = $request->all();

        $this->todo->fill($inputs);
        $this->todo->save();
        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        $todo = $this->todo->find($id);
        return view('todo.show', ['todo' => $todo]);
    }

    public function edit($id)
    {
        $todo = $this->todo->find($id);
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(TodoRequest $request, $id) // 第1引数: リクエスト情報の取得　第2引数: ルートパラメータの取得
    {
        $inputs = $request->all();
        $todo = $this->todo;
        $todo->fill($inputs)->save();

        return redirect()->route('todo.show', $todo->id);
    }
}
