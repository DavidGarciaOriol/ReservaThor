@extends('layouts.app')

@section('title', 'Room Info')

@section('content')
    <h2>{{ $room->title }}</h2>

    <h4>Type: {{ $room->type->name }}</h4>
    <p>{{ $room->description }}</p>

    @include('public.rooms.partials.buttons')

@endsection