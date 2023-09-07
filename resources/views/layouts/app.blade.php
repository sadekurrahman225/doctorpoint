<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Doctor's Point</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>



        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
        <!-- Custom fonts for this template-->
        <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            {{-- <main>
                {{ $slot }}
            </main> --}}


            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                  <a class="nav-link" href="charts.html">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Charts</span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                  <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Tables</span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"
                    data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Components</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                      <a href="navbar.html">Navbar</a>
                    </li>
                    <li>
                      <a href="cards.html">Cards</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages"
                    data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Example Pages</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                      <a href="login.html">Login Page</a>
                    </li>
                    <li>
                      <a href="register.html">Registration Page</a>
                    </li>
                    <li>
                      <a href="forgot-password.html">Forgot Password Page</a>
                    </li>
                    <li>
                      <a href="blank.html">Blank Page</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"
                    data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Menu Levels</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                      <a href="#">Second Level Item</a>
                    </li>
                    <li>
                      <a href="#">Second Level Item</a>
                    </li>
                    <li>
                      <a href="#">Second Level Item</a>
                    </li>
                    <li>
                      <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                      <ul class="sidenav-third-level collapse" id="collapseMulti2">
                        <li>
                          <a href="#">Third Level Item</a>
                        </li>
                        <li>
                          <a href="#">Third Level Item</a>
                        </li>
                        <li>
                          <a href="#">Third Level Item</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                  <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Link</span>
                  </a>
                </li>
              </ul>
              {{-- <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                  </a>
                </li>
              </ul> --}}
              <ul class="navbar-nav ml-auto">
            <ul class="navbar-nav ml-auto">
            
        </div>
          <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    </body>
</html>
