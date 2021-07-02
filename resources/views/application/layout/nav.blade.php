<div class="container mb-3 mt-3 d-none d-lg-block">
  <div class="d-flex justify-content-between">
    <div class="">
      <img src="{{ asset('application/assets/dist/images/logo.svg') }}" alt="">
    </div>
    <div class="d-flex gap-3">
      <div class="d-flex">
        <div class="text-success flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
        </div>
        <p class="flex-grow-1 ms-3 text-dark">(mobile) +31 626 964 606</p>
      </div>
      <div class="d-flex">
        <div class="text-success flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
        </div>
        <p class="flex-grow-1 ms-3 text-dark">(office) +31 412 610 560</p>
      </div>
      <div class="d-flex">
        <div class="text-success flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path
                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
            </svg>
        </div>
        <p class="flex-grow-1 ms-3 text-dark">info@hannafoods.nl</p>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand d-block d-lg-none" href="#">
          <img src="{{ asset('application/assets/dist/images/logo.svg') }}" />
        </a>

        <div class="d-flex align-items-center gap-3">
          <a href="#" class="d-block d-lg-none text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </a>
          <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about-us')}}">Over ons</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
              aria-expanded="false">{{__("Onze producten")}}</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="{{route('show.products.by.type','do-ghazal')}}">{{__("Do Ghazal")}}</a></li>
              <li><a class="dropdown-item" href="{{route('show.products.by.type','happy-cow-cheese')}}">{{__("Happy Cow Cheese")}}</a></li>
              <li><a class="dropdown-item" href="{{route('show.products.by.type','dutso')}}">{{__("Dutso")}}</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nieuws</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">{{ __('Contact') }}</a>
          </li>
        </ul>
        <div class="d-flex align-items-center gap-4">
          <div class="d-flex gap-4">
            <a href="{{ route('locale', 'nl') }}">
              <img src="{{ asset('application/assets/dist/images/netherlands.svg') }}" alt="">
            </a>
            <a href="{{ route('locale', 'en') }}">
              <img src="{{ asset('application/assets/dist/images/united-kingdom.svg') }}" alt="">
            </a>
          </div>
          <div class="input-group">
            <input type="text" class="form-control shadow-sm border-0" placeholder="Search" aria-label="Search"
              aria-describedby="button-search">
            <button class="btn btn-success shadow-sm border-0" type="button" id="button-search">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>
