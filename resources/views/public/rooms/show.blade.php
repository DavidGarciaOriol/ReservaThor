@extends('layouts.app')

@section('title', 'Room Info')

@section('content')
    <h2>{{ $room->title }}</h2>
    <h4>{{ str_plural("Author", $room->authors->count())}}: {{ $room->authors->pluck('name')->implode(', ') }}</h4>
    <h4>Publisher: {{ $room->publisher->name }}</h4>
    <p>{{ $room->description }}</p>

    @include('public.rooms.partials.buttons')

@endsection