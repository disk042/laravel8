<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restdata;

class RestappController extends Controller
{

    public function index(): array
    {
        $items = Restdata::all();
        return $items->toArray();
    }


    public function create()
    {
        return view('rest.create');
    }


    public function store(Request $request)
    {
        $restdata = new Restdata;
        $form = $request->all();
        unset($form['_token']);
        $restdata->fill($form)->save();
        return redirect('/rest');
    }


    public function show($id)
    {
        $item = Restdata::find($id);
        return $item->toArray();
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
