@extends('layouts/app')

@section('content')

<div class="wrapper">
<h1>Computer-Engineering</h1>

<!-- Carousel goes here -->
<div id="carouselExampleControls" class="carousel slide carousel-margin" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1519397154350-533cea5b8bff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-mod " alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1485965373059-f07657e9f841?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-mod" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1517420704952-d9f39e95b43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" class="d-block w-100 img-mod" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- button for the form goes here -->
<button type="button" id="form-button" class="btn btn-primary btn-space"><a class="no-dec-links" href="/form">ADD LOCATION TO GET STARTED</a></button>
@endsection
