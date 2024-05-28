<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics=Comic::all();
        $data=[
            "comics"=>$comics
        ];

        return view('comics.index',$data);

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $formData =$request->all( );

        // nuova riga 
        $validated = $request->validate([
            'title' => 'required|min:4|max:255',
            'image' => 'required|min:4|max:255',
            'type' => 'required|min:2|max:255',
            'series' => 'required|min:2|max:255',
            'date' => 'required|date',
            'price' => 'required',
            'description' => 'required|min:2|max:300',
        ]);
        $newComic= new Comic();
        $newComic->fill($formData);
        $newComic->save();
        return redirect()->route('comics.show',['comic'=>$newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comic = Comic::findOrFail($id);

        $data=[
        "comic"=>$comic
        ];
        return view('comics.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comic = Comic::findOrFail($id);
        $data=[
            "comic"=>$comic
            ];
        return view('comics.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $comic = Comic::findOrFail($id);

        $formData = $request->all();

        $comic->update($formData);
        
        return redirect()->route('comics.show',['comic'=>$comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comic = Comic::findOrFail($id);

        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}
