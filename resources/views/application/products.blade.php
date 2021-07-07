@extends('application.layout.app')
@section('content')

<div class="container">
  @livewire('banner', ['location' => 'products'])
 
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <a href="index.html" class="text-success text-decoration-none">Home</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </svg>
      <span class="fw-bold">DO Ghazal</span>
    </div>
  </div>
</div>

<div class="p-5"></div>

<div class="products">
  <div class="container">
      <div class="row">
          <div class="col text-center">
              <h1 class="text-success">DO Ghazal</h1>
              <p>Duis et aliquam orci. Vivamus augue quam, sollicitudin quis <br> bibendum quis, eleifend vitae velit.</p>
          </div>
      </div>

      <div class="row mt-5">
          @foreach ($products as $product) 
          <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="product p-3 d-flex justify-content-center flex-column align-items-center">
                  <div>
                      <img class="img-fluid" src="{{asset($product->image)}}">
                  </div>
                  <div class="text-center">
                      <a href="#" class="text-dark text-decoration-none fw-bold">{{$product->father}}</a>
                      <p class="mt-3 mb-3 text-black-50">{{$product->name}}</p>

                      <a href="{{route('show.product',$product->name)}}" class="btn btn-success">{{__("Lees meer")}}&nbsp;
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                          </svg>
                      </a>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>

<div class="p-5"></div>
@endsection