@extends('layouts.app')

@section('title', 'Room List')

@section('content')
<h1>Room List</h1>

    <div class="d-flex justify-content-center">
        {{ $rooms->links() }}
    </div>

    @forelse($rooms as $room)
    <div class="room-card card mb-2">
        <div class="card-header">
            {{ $room->title }}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <img class="img-fluid" src="{{ $room->cover }}" alt="">
                </div>
                <div class="col">
                    <h6 class="card-subtitle mb-2 text-muted">Type: {{ $room->type->name }}</h6>
                    <p class="card-text">{{ str_limit($room->description, 300) }}</p>

                    @include('public.rooms.partials.buttons')

                    <a href="/rooms/{{ $room->slug }}" class="btn btn-primary btn-sm mr-2 float-right">View Room</a>
                </div>
            </div>
      </div>
    </div>
    @empty
      <p>There's no Rooms to show.</p>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $rooms->links() }}
    </div>
@endsection