<?php

namespace App\Http\Controllers;
use App\Models\Todoitem;
use Illuminate\Http\Request;

class TodoitemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todoitems = Todoitem::get();
        return view('Components.todoitem.index',compact('todoitems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Components.todoitem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            // 'collection'=>'required'
        ]);

     
            Todoitem::create([
                'name'=> $request->name,
                'description'=> $request->description,
                'collection_id'=>$request->collection
            ]);

        notify()->success('Lati se Successfully created');
        return redirect()->route('Components.todoitem.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todoitem = Todoitem::find($id);
        return view('Components.todoitem.edit',compact('todoitem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $todoitem = Todoitem::find($id);
        $todoitem->name = $request->name;
        $todoitem->description = $request->description;
        $todoitem->collection_id = $request->collection;
        $todoitem->save();
        notify()->success('Lati se Successfully updated');
        return redirect()->route('Components.todoitem.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todoitem = Todoitem::find($id);
        $todoitem->delete();
        notify()->success('Lati se Successfully deleted');
        return redirect()->route('Components.todoitem.index');
    }
}
