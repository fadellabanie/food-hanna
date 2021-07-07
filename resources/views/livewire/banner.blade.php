<div>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          @foreach ($banners as $banner)
          @foreach ($banner->images as $item)
              
          <img src="{{asset($item->image)}}" class="bd-placeholder-img" width="100%" height="100%" alt="">
          <div class="carousel-item active">
              
              <div class="container">
                  <div class="carousel-caption text-start">
                      
                </div>
            </div>
        </div>
        @endforeach
        @endforeach

      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{__("Previous")}}</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{__("Next")}}</span>
      </button>
    </div>
</div>
