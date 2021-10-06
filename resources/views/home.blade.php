@extends('base')

@section('content')


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ asset('imgs/2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('imgs/2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imgs/1.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <ul class="honeycomb">
    <li class="honeycomb-cell">
        <img class="honeycomb-cell_img" src="{{ asset('imgs/2.jpg')}}">
        <div class="honeycomb-cell_title">Sra-Live</div>
    </li>
    <li class="honeycomb-cell">
        <img class="honeycomb-cell_img" src="{{ asset('imgs/1.png')}}">
        <div class="honeycomb-cell_title">découvrir</div>
    </li>
    <li class="honeycomb-cell">
        <img class="honeycomb-cell_img" src="{{ asset('imgs/1.png')}}">
        <div class="honeycomb-cell_title">J’AI BESOIN D'AIDE</div>
    <li class="honeycomb-cell">
        <img class="honeycomb-cell_img" src="img/work4.jpg">
        <div class="honeycomb-cell_title">calendrier</div>
    </li>
    <li class="honeycomb-cell">
        <img class="honeycomb-cell_img" src="img/work5.jpg">
        <div class="honeycomb-cell_title">JE DÉSIRe GRANDIR MA FOI<small></small></div>
    </li>
    <li class="honeycomb-cell">
        <img class="honeycomb-cell_img" src="img/work06.jpg">
        <div class="honeycomb-cell_title">j'ai besoin de servir<small></small></div>
    </li>
    <li class="honeycomb-cell">
        <img class="honeycomb-cell_img" src="img/work07.jpg">
        <div class="honeycomb-cell_title"> NOS DÉPARTEMENTS ET MINISTÈRES </div>
    </li>
    <li class="honeycomb-cell honeycomb_Hidden">
    </li>
</ul>

@endsection
