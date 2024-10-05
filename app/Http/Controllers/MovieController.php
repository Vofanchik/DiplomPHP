<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Movie::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request)
    {
        return Movie::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->fill($request->validated());
        return $movie->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        if($movie->delete()){
            return response(null, 200);
        }
        return null;
    }
}
