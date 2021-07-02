@extends('application.layout.app')
@section('content')

<div class="container">
    <div id="myCarousel" class="carousel slide pt-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/dist/images/slider.svg" class="bd-placeholder-img" width="100%" height="100%" alt="">

          <div class="container">
            <div class="carousel-caption text-start">

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/dist/images/slider.svg" class="bd-placeholder-img" width="100%" height="100%" alt="">

          <div class="container">
            <div class="carousel-caption">

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/dist/images/slider.svg" class="bd-placeholder-img" width="100%" height="100%" alt="">

          <div class="container">
            <div class="carousel-caption text-end">

            </div>
          </div>
        </div>

        <img src="assets/dist/images/category-2.svg" class="position-absolute slider-logo">
      </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <a href="index.html" class="text-success text-decoration-none">{{__("Home")}}</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </svg>
      <span class="fw-bold">{{__("DO Ghazal")}}</span>
    </div>
  </div>
</div>

<div class="p-5"></div>

<section class="categories pt-5 pb-5">
  <div class="container">
    <div class="row row-cols-3 g-1 g-lg-5">
        @foreach ($categories as $category)
      <div class="col">
        <a href="{{route('show.categories.by.type',$category->name_en)}}">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <img src="{{asset($category->image)}}" class="rounded-circle shadow p-3 bg-white w-75" alt="{{$category->name}}">
        </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection