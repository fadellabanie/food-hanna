@extends('application.layout.app')
@section('content')

<div class="container">
  @livewire('banner', ['location' => 'home'])

</div>

<div class="container">
  <div class="row">
    <div class="col">
      <a href="index.html" class="text-success text-decoration-none">{{__("Home")}}</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </svg>
      <span class="fw-bold">{{ str_replace('_',' ',__(Request::segment(2))) }}
      </span>
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