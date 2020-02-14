<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> System obsługi @yield('title')</title>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    
    <style>
footer{
    background-color: #eee;
    padding: 10px 0px;
    margin-top: 120px;
    text-decoration-color: blueviolet;
}
    </style>

  </head>
  <body>
    
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      

         <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Logowanie</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Rejestracja</a></li>
                        @else

                             <li class="nav-item">
                              <a class="nav-link" href="{{ URL::to('doctors') }}">Lekarze </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ URL::to('specializations') }}">Specjalizacje</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ URL::to('visits') }}">Wizyty</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ URL::to('patients') }}">Pacjenci</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ URL::to('posts') }}">Blog</a>
                            </li>

                            <li class="dropdown nav-ite">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
      </div>
    </nav>


    @yield('content')
    

    <footer class="text-center" id="foot">
    <!--@if (isset($footerYear))-->
      {{ $footerYear }}
    <!--@endif-->
    </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/code.js') }} "></script>
  </body>
</html>
