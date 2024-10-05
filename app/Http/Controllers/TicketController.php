<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Requests\TicketRequest;

class TicketController extends Controller
{
    /**
   * Display a listing of the resource.
   */
  public function index()
  {
      return Ticket::paginate(10);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(TicketRequest $request)
  {
      return Ticket::create($request->validated());
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
      return Ticket::findOrFail($id);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(TicketRequest $request, Ticket $ticket)
  {
      $ticket->fill($request->validated());
      return $ticket->save();
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Ticket $ticket)
  {
      if($ticket->delete()){
          return response(null, 200);
      }
      return null;
  }
}
