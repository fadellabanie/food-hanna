<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white" aria-label="Main navigation">
    <div class="container">
      <a class="navbar-brand d-none d-sm-block d-md-none" href="#">Offcanvas navbar</a>
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Over ons</a>
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
            <a class="nav-link" href="#">Contact</a>
          </li>

        </ul>
        <form class="d-flex">
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
        </form>
      </div>
    </div>
  </nav>
