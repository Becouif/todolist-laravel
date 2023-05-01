<?php

namespace App\Http\Controllers;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::get();
        return view('Components.collection.index',compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Components.collection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:collections'
        ]);
        Collection::create([
            'name'=>$request->name,
            'description'=> $request->description
        ]);
        notify()->success('Akojo Successfully created');
        return redirect()->route('Components.collection.index');

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
        //
        $collection = Collection::find($id);
        return view('Components.collection.edit',compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $collection = Collection::find($id);
        $collection->name = $request->name;
        $collection->description = $request->description;
        $collection->save();

        notify()->success('Akojo Successfully updated');
        return redirect()->route('Components.collection.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $collection = Collection::find($id);
        $collection->delete();
        notify()->success('Akojo Successfully deleted');
        return redirect()->route('Components.collection.index');

    }
}
