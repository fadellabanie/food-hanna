@extends('application.layout.app')
@section('content')

<div class="container">
  @livewire('banner', ['location' => 'news'])

</div>

<div class="container">
  <div class="row">
    <div class="col">
      <a href="{{route('home')}}" class="text-success text-decoration-none">{{__("Home")}}</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </svg>
      <a href="{{route('news')}}" class="text-success text-decoration-none">{{__("News")}}</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </svg>
      <span class="fw-bold">{{Str::ucfirst($news->title)}}</span>
    </div>
  </div>
</div>

<div class="p-5"></div>

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <div class="p-3 rounded-3 mb-3 product-image">
          <img src="{{asset($news->image)}}" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-12 col-md-6">
        <h3 class="text-success">{{$news->title}}</h3>
        <p>{{$news->description}}</p>
        <hr>
       
        <p>{{$news->created_at->format('d-m-Y')}}</p>
      </div>
    </div>
  </div>
</section>

<div class="p-5"></div>

@endsection