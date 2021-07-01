@include('application.layout.head')

<body class="bg-white">
    @include('application.layout.nav')

   @yield('content')
   

    @include('application.layout.footer')
  