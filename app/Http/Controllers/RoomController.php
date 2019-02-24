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
      $publishers = Publisher::all();
      $authors = Author::all();
      return view('public.books.create', [
          'publishers' => $publishers,
          'authors'    => $authors
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
      $book = Book::create([
          'user_id' => $request->user()->id,
          'publisher_id' => request('publisher'),
          'title' => request('title'),
          'slug' => str_slug(request('title'), "-"),
          'description' => request('description')
      ]);
      $book->authors()->sync( request('author') );
      return redirect('/');
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function show($slug)
  {
      $book = Book::where('slug', $slug)->firstOrFail();
      return view('public.books.show', ['book' => $book]);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function edit(Book $book)
  {
      $publishers = Publisher::all();
      $authors = Author::all();
      return view('public.books.edit', [
          'book' => $book,
          'authors' => $authors,
          'publishers' => $publishers
      ]);
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function update(BookRequest $request, Book $book)
  {
      $book->update([
          'title' => request('title'),
          'publisher_id' => request('publisher'),
          'slug' => str_slug(request('title'), "-"),
          'description' => request('description')
      ]);
      $book->authors()->sync( request('author') );
      return redirect('/books/'.$book->slug);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function destroy(Book $book)
  {
      $book->authors()->detach();
      $book->delete();
      return redirect('/');
  }

}
