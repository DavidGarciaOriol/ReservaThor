<?php

namespace App\Http\Controllers;

use App\Room;
use App\Owner;
use App\Address;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;

class RoomController extends Controller
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
      $rooms = Room::paginate(6);
      return view('public.rooms.index')->withRooms($rooms);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $types = Type::all();
      return view('public.rooms.create', [

        'types'    => $types
    ]);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(RoomRequest $request)
  {
      $room = Room::create([
          'user_id' => $request->user()->id,
          'title' => request('title'),
          'slug' => str_slug(request('title'), "-"),
          'address' => request('address'),
          'type_id' => request('type'),
          'prize' => request('prize'),
          'description' => request('description')
      ]);
      return redirect('/');
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Room $room
   * @return \Illuminate\Http\Response
   */
  public function show($slug)
  {
      $room = Room::where('slug', $slug)->firstOrFail();
      return view('public.rooms.show', ['room' => $room]);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Room $room
   * @return \Illuminate\Http\Response
   */
  public function edit(Room $room)
  {
      $types = Type::all();

      return view('public.rooms.edit', [
          'room' => $room,
          'types' => $types
      ]);
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Room  $room
   * @return \Illuminate\Http\Response
   */
  public function update(RoomRequest $request, Room $room)
  {
      $room->update([
          'title' => request('title'),
          'type' => request('type'),
          'slug' => str_slug(request('title'), "-"),
          'address' => request('address'),
          'prize' => request('prize'),
          'description' => request('description')
      ]);
      return redirect('/rooms/'.$room->slug);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Room  $room
   * @return \Illuminate\Http\Response
   */
  public function destroy(Room $room)
  {
    $room->delete();
    return redirect('/');
  }

}
