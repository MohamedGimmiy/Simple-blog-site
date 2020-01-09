<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>


        <link   href= {{ asset("css/app.css") }} rel="stylesheet" />
        <link  href= {{ asset("css/style.css")}}  rel="stylesheet" />

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>  
                @else
                <li class="nav-item">
                    <a class="nav-link" href="">Welcome {{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}">LogOut</a>
                  </li>
                @endguest


              </ul>
             
            </div>
          </nav>
        @yield('content')
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>