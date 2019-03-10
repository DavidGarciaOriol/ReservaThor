@extends('layouts.app')

@section('title', 'Index Page')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">ReservaTHOR Home Page</h1>
  <p class="lead">Here you can do booking, without books.</p>
  <hr class="my-4">
  <p></p>
  <a class="btn btn-primary btn-lg" href="/about" data-toggle="tooltip" data-placement="top" title="Application Information" role="button">About</a>
  <a class="btn btn-primary btn-lg" href="/rooms" data-toggle="tooltip" data-placement="top" title="A list with all rooms" role="button">Room List</a>
  @auth<a class="btn btn-success btn-lg" href="/rooms/create" data-toggle="tooltip" data-placement="top" title="Create a new Room" role="button">Create</a>
  <a class="btn btn-secondary btn-lg" href="#" data-toggle="tooltip" data-placement="top" title="Work in Progress" role="button">Make Reservation (Soon)</a>@endauth
</div>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/260/60/?image=1076" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-info">Descubre</h5>
          <p class="text-info">Busca y encuentra aquel lugar especial donde celebrar ese momento especial.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/260/60/?image=1075" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-info">Crea</h5>
          <p class="text-info">¿Tienes algo que compartir con el mundo? Deja que veamos tu emplazamiento</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/g/260/60/?image=5" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-success">Fácil y Sencillo</h5>
          <p class="text-success">Sólo debes dar el click en el lugar deseado.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


@endsection