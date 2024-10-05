<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Http\Requests\PlaceRequest;
class PlaceController extends Controller
{
    /**
   * Display a listing of the resource.
   */
  public function index()
  {
      return Place::paginate(10);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(PlaceRequest $request)
  {
      return Place::create($request->validated());
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
      return Place::findOrFail($id);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(PlaceRequest $request, Place $place)
  {
      $place->fill($request->validated());
      return $place->save();
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Place $place)
  {
      if($place->delete()){
          return response(null, 200);
      }
      return null;
  }
}
