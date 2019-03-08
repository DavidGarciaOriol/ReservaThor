@extends('layouts.app')

@section('title', 'New Reservation')

@section('content')
<h1>Make a Reservation</h1>
<form action="/reservations" method="post" enctype="multipart/form-data" novalidate>

    @csrf

    @include('public.reservations.partials.form')

    <button type="submit" class="btn btn-primary">Confirm Reservation</button>
</form>
@endsection