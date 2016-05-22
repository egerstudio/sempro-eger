<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Bootstrap & styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                @if (Auth::user())
                <!-- Show collapsed hamburger if the user is logged in, no menu items to collapse otherwise -->
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @endif

                <!-- Branding -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{{ asset('images/logo.png') }}}" class="img-responsive brand-img">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a class="" href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Login</a></li>
                    @endif

                    @if (Auth::user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-btn fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-cog"></i> Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

    <section id="content">
        <div class="container bg-partial">
            <div class="row text-center">
                <!-- Flash message -->
                @if (session('flash_message'))
                    <div class="alert alert-success">{{session('flash_message')}}</div>
                @endif

                <!-- Toolbar -->
                @include('parts.toolbar')
            </div>
            @yield('content')
        </div>
    </section>

    <section id="footer">
       
    </section>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>