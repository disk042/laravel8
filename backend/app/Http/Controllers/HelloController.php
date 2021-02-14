<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people (name, mail, age) values(:name, :mail, :age)', $param);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('hello.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
            ];
        DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id', $id)->first();
        return view('hello.show', ['item' => $item]);
    }
}
