<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Actors on Actors @yield('page-title')</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Bootstrap & styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">

</head>
<body>
    <!-- navigation -->
    <section id="navigation">
        <div class="container">
            @include('partials.nav')
        </div>
    </section>

    <section id="content">
        <div class="container bg-partial">
            @yield('content')
        </div>
    </section>

    <section id="footer">
       
    </section>

    <!-- JavaScripts -->
    <script src="{{ asset('js/libs.js') }}"></script> 
    @yield('scripts')
    @include('flash')
</body>
</html>