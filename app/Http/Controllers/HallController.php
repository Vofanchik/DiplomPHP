<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Http\Requests\HallRequest;

class HallController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hall::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HallRequest $request)
    {
        return Hall::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Hall::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HallRequest $request, Hall $hall)
    {
        $hall->fill($request->validated());
        return $hall->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hall $hall)
    {
        if($hall->delete()){
            return response(null, 200);
        }
        return null;
    }
}
