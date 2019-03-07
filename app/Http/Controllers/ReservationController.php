<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth', [
          'only' => ['create' , 'store', 'edit', 'update', 'destroy']
      ]);
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $reservations = Reservation::paginate(3);
      return view('public.reservations.index')->withReservations($reservations);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $types = Type::all();
      return view('public.reservations.create', [

        'types'    => $types
    ]);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ReservationRequest $request)
  {
      $reservation = Reservation::create([
        
        'name' => request('name'),

        'totalPrize' => request('totalPrize'),

        'startDate' => request('startDate'),

        'endDate' => request('endDate')
      ]);
      return redirect('/reservations');
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Reservation  $reservation
   * @return \Illuminate\Http\Response
   */
  public function show($slug)
  {
      $reservation = Reservation::where('slug', $slug)->firstOrFail();
      return view('public.reservations.show', ['reservation' => $reservation]);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Reservation $reservation
   * @return \Illuminate\Http\Response
   */
//   public function edit(Reservation $reservation)
//   {
//       //
//   }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Reservation  $reservation
   * @return \Illuminate\Http\Response
   */
//   public function update(ReservationRequest $request, Reservation $reservation)
//   {
//       $room->update([
//           //'title' => ,
          
//           //'slug' => str_slug(request('title'), "-"),
          
//           'totalPrize' => request('prize'),

//           'startDate' => request('startDate'),

//           'endDate' => request('endDate')
//       ]);
//       return redirect('/reservation/'.$reservation->slug);
//   }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Reservation  $reservation
   * @return \Illuminate\Http\Response
   */
  public function destroy(Reservation $reservation)
  {
    $reservation->delete();
    return redirect('/');
  }

}
