<?php

namespace App\Http\Controllers;

use App\Reservation;
//use App\Room;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;

class ReservationsController extends Controller
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
    $reservations = Reservation::latest()->paginate(8);
    return view('public.reservations.index')->withReservations($reservations);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('public.reservations.create');
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

        'user_id' => $request->user()->id,

        'room_id' => $request->room()->id,
        
        'name' => request('name'),

        'totalPrize' => '100', //$request->room()->prize * $days,

        /*$datetime1 = */'startDate' => request('startDate'),

        /*$datetime2 = */'endDate' => request('endDate'),

        //$interval = request($datetime1)->diff($datetime2),

        //$days = $interval->format('%a')

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
