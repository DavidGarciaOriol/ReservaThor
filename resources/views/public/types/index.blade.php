@extends('layouts.app')

@section('title', 'Types Index')

@section('content')
<h1>Type List</h1>

    <div class="d-flex justify-content-center">
        {{ $types->links() }}
    </div>

    @foreach($types as $type)

    <div class="card mb-2">
        <div class="card-header">
            {{ $type->name }}
        </div>
        <div class="card-body">
            <p class="card-text">{{ $type->description }}</p>
        </div>
    </div>

    @endforeach
    
@endsection