@extends('application.layout.app')

@section('content')
<div id="myCarousel" class="carousel slide pt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('application/assets/dist/images/slider.svg')}}" class="bd-placeholder-img" width="100%" height="100%" alt="">

        <div class="container">
          <div class="carousel-caption text-start">

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('application/assets/dist/images/slider.svg')}}" class="bd-placeholder-img" width="100%" height="100%" alt="">

        <div class="container">
          <div class="carousel-caption">

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('application/assets/dist/images/slider.svg')}}" class="bd-placeholder-img" width="100%" height="100%" alt="">

        <div class="container">
          <div class="carousel-caption text-end">

          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">{{__("Previous")}}</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">{{__("Next")}}</span>
    </button>
  </div>

  <div class="p-5"></div>

  <section class="categories pt-5 pb-5">
    <div class="container">
      <div class="row row-cols-3 g-1 g-lg-5">
        <div class="col">
          <a href="{{route('show.father.categories.by.type','do-ghazal')}}">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{asset($data['categories']->do_ghazal)}}" class="rounded-circle shadow p-3 bg-white w-75">
          </div>
          </a>
        </div>
        <div class="col">
          <a href="{{route('show.father.categories.by.type','happy-cow_cheese')}}">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{asset($data['categories']->happy_cow_cheese)}}" class="rounded-circle shadow p-3 bg-white w-75">
          </div>
          </a>
        </div>
        <div class="col">
          <a href="{{route('show.father.categories.by.type','dutso')}}">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{asset($data['categories']->dutso)}}" class="rounded-circle shadow p-3 bg-white w-75">
          </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class="p-5"></div>

  <section class="articles">
    <div class="text-center">
      <h1 class="text-primary">{{__("Nieuws")}}</h1>
    </div>

    <div class="container">
      <div class="row">
        <div id="news-owl-carousel" class="owl-carousel owl-theme mt-5">
          @foreach ($data['news'] as $news)
          <div class="item article-item shadow rounded">
            <div class="article-image">
              <img src="{{asset($news->image)}}" height="200" alt="">
            </div>
            <div class="p-3">
              <h5 class="article-title text-primary">
                {{$news->title}}
              </h5>
              <p class="article-desc">
                {{$news->description}}
              </p>
              <a href="#" class="text-success text-decoration-none">
                Lees meer &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
              </a>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </section>

  <div class="p-5"></div>

  <section class="videos">
    <div class="text-center">
      <h1 class="text-primary">{{__("Our Videos")}}</h1>
    </div>
    <div class="container mt-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
        @foreach ($data['videos'] as $video)
        <div class="col">
          <div class="card shadow">
            <div class="ratio ratio-16x9">
              <iframe width="100%"  src="{{$video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <p>{{$video->name}}</p>
              <p class="text-black-50">{{formatDate($video->created_at)}}</p>
              <a href="#" class="video-link">{{__("Watch It")}} !</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>
    </div>
  </section>

  <div class="p-5"></div>

  <section class="about d-flex flex-column align-items-center justify-content-center p-5" style="background-image: url('assets/dist/images/about.svg');">
    <div>
      <h3 class="text-white">De ultieme theebeleving!</h3>
      <p class="text-light mt-5" style="max-width: 500px;">
        De Do Ghazal Tea is gemaakt van de plant ‘Camellia Sinensis’, afkomstig uit Sri Lanka. De thee is met zorg verwerkt en verpakt. De puurheid van dit product proef je!

        Hannafoods introduceert een nieuw product genaamd ‘Do Ghazal Fruit Tea Bags’. Heerlijk warm of koud! De vruchtenthee barst van kleur, leven en smaak. Do Ghazal Fruit Tea is beschikbaar
      </p>
    </div>
  </section>

  <div class="p-5"></div>

  <section class="team pt-5 pb-5">
    <div class="text-center">
      <h1 class="text-primary">{{__("Our Team")}}</h1>
    </div>
    <div class="container">
      <div class="row">
        <div id="team-owl-carousel" class="owl-carousel owl-theme mt-5">
          @foreach ($data['teams'] as $team)
          <div class="item">
            <div class="position-relative d-flex justify-content-center" style="padding-bottom: 75px;">
              <div class="cut-diamond">
              </div>
              <img src="{{asset($team->image)}}" class="position-absolute team-member-img">
            </div>
            <div class="d-flex justify-content-center flex-column align-items-center">
              <h3>{{$team->name}}</h3>
              <p class="text-primary">{{$team->position}}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @endsection