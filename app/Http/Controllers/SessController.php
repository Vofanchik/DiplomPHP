<?php

namespace App\Http\Controllers;

use App\Models\Sess;
use App\Http\Requests\SessRequest;

class SessController extends Controller
{
    /**
   * Display a listing of the resource.
   */
  public function index()
  {
      return Sess::paginate(10);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(SessRequest $request)
  {
      return Sess::create($request->validated());
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
      return Sess::findOrFail($id);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(SessRequest $request, Sess $sess)
  {
      $sess->fill($request->validated());
      return $sess->save();
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Sess $sess)
  {
      if($sess->delete()){
          return response(null, 200);
      }
      return null;
  }
}
