@extends('application.layout.app')
@section('content')

<div class="container">
    @livewire('banner', ['location' => 'home'])

</div>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{route('home')}}" class="text-success text-decoration-none">{{__("Home")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
            <span class="fw-bold">{{__("Over ons")}}</span>
        </div>
    </div>
</div>

<div class="p-5"></div>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-success">{{__("Import en Export voor Europa")}}</h1>
            </div>
        </div>

        <div class="row align-items-center mt-5 justify-content-center g-0">
            <div class="col-md-6 col-lg-5 col-12 mb-3">
                <div class="p-3 rounded-3 shadow" style="background-color: #F8FAF5;">
                    <p>{{$data['setting']->about}}</p>
                    {{--<ul>
                       <li class="mb-3">Hanna Foods is in het gelukkige bezit van het exclusieve importrecht voor Do
                            Ghazal producten in Europa en het</li>
                        <li class="mb-3">Hanna Foods is in het gelukkige bezit van het exclusieve importrecht voor Do
                            Ghazal producten in Europa en het</li>
                        <li class="mb-3">Hanna Foods is in het gelukkige bezit van het exclusieve importrecht voor Do
                            Ghazal producten in Europa en het</li> 
                    </ul>
--}}
                    {{-- <a href="#" class="text-success text-decoration-none">
                        Lees meer &nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-12">
                <div class="position-relative d-flex justify-content-center align-items-center">
                   
                    <iframe width="100%" height="280px" src="{{$data['setting']->about_video}}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                
                    
                    <button type="button" class="position-absolute btn btn-success rounded-circle" id="play_button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-play-fill" viewBox="0 0 16 16">
                            <path
                                d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="p-5"></div>
<section class="categories pt-5 pb-5">
    <div class="container">
      <div class="row row-cols-3 g-1 g-lg-5">
        <div class="col">
          <a href="{{route('show.father.categories.by.type','do-ghazal')}}">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{asset($data['setting']->do_ghazal)}}" class="rounded-circle shadow p-3 bg-white w-75">
          </div>
          </a>
        </div>
        <div class="col">
          <a href="{{route('show.father.categories.by.type','happy-cow_cheese')}}">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{asset($data['setting']->happy_cow_cheese)}}" class="rounded-circle shadow p-3 bg-white w-75">
          </div>
          </a>
        </div>
        <div class="col">
          <a href="{{route('show.father.categories.by.type','dutso')}}">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{asset($data['setting']->dutso)}}" class="rounded-circle shadow p-3 bg-white w-75">
          </div>
          </a>
        </div>
      </div>
    </div>
  </section>

<div class="p-5"></div>

<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-success mb-5">{{__("Waarom kiezen voor Hanna Foods?")}}</h1>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-4">
                @foreach ($data['right_question'] as $key=> $item)
                <div class="d-flex gap-3 mb-3">
                    <div class="why-point d-flex justify-content-center align-items-center text-white">0{{$key+1}}</div>
                    <div class="">
                        <h5>
                            {{$item->question}}
                        </h5>
                        <p class="text-black-50">
                            {{$item->answer}}
                        </p>
                    </div>
                </div>
                @endforeach
             
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <img src="{{asset('application/assets/dist/images/tea.jpg')}}" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                @foreach ($data['left_question'] as $key=> $item)
                <div class="d-flex gap-3 mb-3">
                    <div class="why-point d-flex justify-content-center align-items-center text-white">0{{$key+4}}</div>
                    <div class="">
                        <h5>
                            {{$item->question}}
                        </h5>
                        <p class="text-black-50">
                            {{$item->answer}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="p-5"></div>

@endsection