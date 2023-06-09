<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all(['id','title','description']);
        return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $genre = Genre::create($request->post());
        return response()->json([
            'message'=>'Category Created Successfully!!',
            'category'=>$genre
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return response()->json($genre);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $genre->fill($request->post())->save();
        return response()->json([
            'message'=>'Category Updated Successfully!!',
            'category'=>$genre
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return response()->json([
            'message'=>'Category Deleted Successfully!!'
        ]);
    }
}
