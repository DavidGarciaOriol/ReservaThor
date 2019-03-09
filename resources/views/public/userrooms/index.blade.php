@extends('layouts.app')

@section('title', 'User Rooms')

@section('content')
<h1>{{ $user->name }}'s Room List</h1>

    <div class="d-flex justify-content-center">
        {{ $rooms->links() }}
    </div>

    @forelse($rooms as $room)
    <div class="card mb-2">
        <div class="card-header">
            {{ $room->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $room->user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $room->type->name }}</h6>
            <p class="card-text">{{ str_limit($room->description, 300) }}</p>


            @auth
            <a href="/rooms/{{ $room->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
            <form action="/rooms/{{ $room->id }}" method="post" class="mr-2 float-right">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm">Delete room</button>
            </form>
            @endauth
            <a href="/rooms/{{ $room->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
      </div>
    </div>
    @empty
      <p>There's no rooms to show.</p>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $rooms->links() }}
    </div>
@endsection
