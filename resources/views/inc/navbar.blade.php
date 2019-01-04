<nav id="header" class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button id="nav-brand" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar" style="background-color: #444 !important;"></span>
                <span class="icon-bar" style="background-color: #444 !important;"></span>
                <span class="icon-bar" style="background-color: #444 !important;"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
              <img alt="Haminastu logo" id="nav-logo" src="{{ asset('storage/images/h.png') }}">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav ">
              <li class="nav-link"><a id="nav-brand" href='{!! url('/'); !!}'>{{ config('app.name') }}</a></li>
              <!-- <a id="nav-brand" href='{!! url('/'); !!}'><span class="glyphicon glyphicon-home" aria-hidden="true"><span></a> -->
              {{-- <li><a href='{!! url('/about'); !!}'>About</a></li> --}}

              <!-- @auth -->
               <!-- <li class="nav-link"><a id="nav-brand" href='{!! url('/services'); !!}'>Services</a></li> -->
              <!-- @endauth -->


              {{-- <li class="nav-link"><a href='#o'>Schedule</a></li> --}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
              @auth
              <li class="nav-link"><a id="nav-brand" href='{!! url('/tickets'); !!}'>Tickets</a></li>
              @endauth
              <li class="nav-link"><a id="nav-brand" href='{!! url('/services'); !!}'>Services</a></li>
              {{--<li class="nav-link"><a id="nav-brand" href='{!! url('/blog'); !!}'>Blog</a></li> --}}


            </ul>
        </div>
    </div>
</nav>
