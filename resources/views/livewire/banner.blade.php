<div>
  <div id="myCarousel" class="carousel slide pt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach ($banners as $key => $banner)
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}" aria-current="true" aria-label="Slide {{ ++$key }}"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach ($banners as $key => $banner)
      <div class="carousel-item">
        <img src="{{asset($banner->image)}}" class="bd-placeholder-img" width="100%" height="100%" alt="">
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
    @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>