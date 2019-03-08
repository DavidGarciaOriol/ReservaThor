@extends('layouts.app')

@section('title', 'reservation List')

@section('content')
<h1>Reservation List</h1>

    <div class="d-flex justify-content-center">
        {{ $reservations->links() }}
    </div>

    @forelse($reservations as $reservation)
    <div class="reservation-card card mb-2">
        <div class="card-header">
            {{ $reservation->name }}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p class="card-text">{{ $reservation->prize }}</p>
                    <p class="card-text">{{ $reservation->startDate }}</p>
                    <p class="card-text">{{ $reservation->endDate }}</p>
                    

                    <a href="/reservations/{{ $reservation->slug }}" class="btn btn-primary btn-sm mr-2 float-right">Reservation Info</a>
                </div>
            </div>
      </div>
    </div>
    @empty
      <p>There's no reservations to show.</p>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $reservations->links() }}
    </div>
@endsection