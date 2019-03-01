@extends('layouts.app')

@section('title', 'Update Room')

@section('content')
<h1>Edit Room</h1>
<form action="/rooms/{{ $room->id }}" method="post" enctype="multipart/form-data" novalidate>

    @csrf
    @method('patch')

    @include('public.rooms.partials.form')

    <button type="submit" class="btn btn-primary">Update Room</button>
</form>
@endsection