<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EasyJob</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scriptfornav.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
</head>
<body>
    <div id="app">

    <nav class="navbar fixed-top navbar-expand-md  navbar-expand-lg navbar-light navbar-laravel" id="navbar">


      <div class="collapse navbar-collapse ml-4" id="navbarSupportedContent">

      <a class="navbar-brand " href="{{ url('/') }}">EasyJob</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <ul class="navbar-nav pullNavbar ml-auto">

          @guest


          <li class="nav-item">
            <a class="nav-link"href="{{ route('employer.register') }}">{{ __('Employer Register') }}</a>
          </li>

      @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Job Seeker Register') }}</a>
          </li>
          @endif
          <li class="nav-item active">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
      @else
      <li class="nav-item">
        <a href="{{route('job.create')}}" class="nav-link">Post a Job</a>
      </li>

          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                @if(Auth::user()->user_type=='employer')
                  {{Auth::user()->company->cname}}
                @elseif(Auth::user()->user_type='jobseeker')
                  {{Auth::user()->name}}
                @endif

              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                @if(Auth::user()->user_type=='employer')

                <a class="dropdown-item" href="{{ route('company.create') }}"
                   >
                    {{ __('Edit Your Company') }}
                </a>

                <a class="dropdown-item" href="{{ route('my.job') }}"
                   >
                    {{ __('My Jobs') }}
                </a>

                <a class="dropdown-item" href="{{ route('applicant') }}"
                   >
                    {{ __('Applicants') }}
                </a>
                @else

                <a class="dropdown-item" href="{{ route('user.profile') }}"
                   >
                    {{ __('Profile') }}
                </a>

                <a class="dropdown-item" href="{{ route('home') }}"
                   >
                    {{ __('Saved Jobs') }}
                </a>
                @endif


                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest


        </ul>

        </div>



    </div>




</nav>

<main class="align-items-center justify-content-center">
    @yield('content')
</main>
</div>
</body>
</html>

<style>
.navbar {

  z-index: 9999;
  background-color: transparent;
  transition:300ms ease;

}

.pullNavbar {
  margin-right: 200px;
}

.changeColor {
  background-color: #b8cfd7 !important;

}

.navbar a {
  color: #0d0b0b !important;
  font-weight: 800;
  font-size: 2em;
  margin-right: 40px;
  text-transform: uppercase;
  font-style: italic;
  position: relative;
}

.navbar-nav li a {
  color: #0d0b0b !important;
  font-weight: 400;
  font-size: 1em;
  font-style: normal;

}

nav a:hover {
  color: #000;
}

nav a::before {
  content: '';
  display: block;
  height: 5px;
  background-color: #51b5da;

  position: absolute;
  top: 0;
  width: 0%;

  transition: all ease-in-out 250ms;
}

nav a:hover::before {
  width: 50%;
}


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
  .navbar a {
    font-size: 1.4em;
  }

  .pullNavbar {
    margin-right: 0;
  }
}




</style>
