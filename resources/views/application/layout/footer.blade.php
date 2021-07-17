
    @livewire('footer')

    @livewire('socal')

<script src="{{asset('application/assets/dist/vendors/jquery.min.js')}}"></script>
<script src="{{asset('application/assets/dist/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('application/assets/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('application/assets/dist/js/offcanvas.js')}}"></script>
<script>
  $(document).ready(function() {
     $("#myCarousel .carousel-inner div").first().addClass("active");
     $("#myCarousel .carousel-indicators button").first().addClass("active");

    $('.client-indicator').click(function() {
      $('.client-indicator.active').removeClass("active");
      $(this).addClass("active");
    });

      $('#news-owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })

      $('#team-owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })
    })
</script>