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
      $rooms = Room::paginate(10);
      return view('public.rooms.index')->withRooms($rooms);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $owner = Owner::all();
      $address = Address::all();
      return view('public.books.create', [
          'owners' => $owners,
          'adrdresses'    => $addresses
      ]);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(BookRequest $request)
  {
      $room = Room::create([
          'user_id' => $request->user()->id,
          'owner' => request('owner'),
          'title' => request('title'),
          'slug' => str_slug(request('title'), "-"),
          'address' => request('address'),
          'type_id' => request('type'),
          'prize' => request('prize'),
          'description' => request('description')
      ]);
      $room->owners()->sync( request('owner') );
      return redirect('/');
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Room $book
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
   * @param  \App\Room $book
   * @return \Illuminate\Http\Response
   */
  public function edit(Room $room)
  {
      $type = Type::all();
      $owner = Owner::all();

      return view('public.rooms.edit', [
          'room' => $room,
          'owners' => $owners,
          'types' => $types
      ]);
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Room  $book
   * @return \Illuminate\Http\Response
   */
  public function update(RoomRequest $request, Room $room)
  {
      $room->update([
          'title' => request('title'),
          'type' => request('type'),
          'slug' => str_slug(request('title'), "-"),
          'address' => request('address'),
          'prize' => reqiest('prize'),
          'description' => request('description')
      ]);
      $room->authors()->sync( request('owner') );
      return redirect('/books/'.$room->slug);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Room  $book
   * @return \Illuminate\Http\Response
   */
  public function destroy(Room $room)
  {
      $room->owners()->detach();
      $room->delete();
      return redirect('/');
  }

}
