@extends('layouts.app')

@section('title', 'Room Info')

@section('content')
    <h2>{{ $room->title }}</h2>

    <h4>Type: {{ $room->type->name }}</h4>
    <h4> Address: {{ $room->address }} </h4>
    <p>{{ $room->description }}</p>
    <h3>Price: {{ $room->prize }} $ </p>
    <a href="/reservations/create" class="btn btn-primary btn-sm mr-2 float-right">Reservate</a>

    @include('public.rooms.partials.buttons')

@endsection