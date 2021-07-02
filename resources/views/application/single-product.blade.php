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
      
        @livewire('category-icon' , ['category' => $product->father])
       
      </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <a href="index.html" class="text-success text-decoration-none">Home</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </svg>
      <a href="products.html" class="text-success text-decoration-none">{{Str::ucfirst($product->father)}}</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </svg>
      <span class="fw-bold">{{Str::ucfirst($product->name_en)}}</span>
    </div>
  </div>
</div>

<div class="p-5"></div>

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <div class="p-3 rounded-3 mb-3 product-image">
          <img src="{{asset($product->image)}}" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-12 col-md-6">
        <h3 class="text-success">{{$product->name_en}}</h3>
        <p>{{$product->description_en}}</p>
        <hr>
        <p>{{__("Loose Tea Pack")}}</p>
        <p>{{$product->size}}</p>
        <p><span class="text-success fw-bold">{{__("Weight")}} :</span>{{$product->weight}}g</p>
      </div>
    </div>
  </div>
</section>

<div class="p-5"></div>

@endsection