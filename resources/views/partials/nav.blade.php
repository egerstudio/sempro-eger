<?php
// just for fun, not important
$bg = array('nav-bg-01',
            'nav-bg-02',
            'nav-bg-03',
            'nav-bg-04',
            'nav-bg-05',
            'nav-bg-06',
            'nav-bg-07',
            );
$i = rand(0, count($bg)-1);
$selectedBg = "$bg[$i]";
?>
<nav class="navbar navbar-default {{$selectedBg}}">
    <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        

        <!-- Branding -->
        <a href="{{ url('/') }}">
            <img src="{{{ asset('images/logo-min.jpg') }}}" class="img-responsive brand" alt="Actors on Actors">
        </a>
    </div>
    <!-- navbar-header end -->

    <div class="collapse navbar-collapse boxme" id="app-navbar-collapse">
    
        <ul class="nav navbar-nav">

            <!-- all videos -->
            <li><a href="{{ action('VideosController@index') }}">All videos</a></li>
            
            <!-- archive -->
            @if(!empty($years))
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Archive <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @foreach ($years->distinctYears() as $year)
                        <li>
                            <a href="{{ action('VideosController@archive',['year' => $year->year]) }}">
                                {{$year->year}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            @endif

            <!-- categories -->
            @if(!empty($categories))
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ action('VideosController@category',['category' => $category->slug]) }}">
                                {{$category->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            @endif
        </ul>




        {{-- toolbar visible for admins --}}
                
        <!-- archive and categories -->
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::user())

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i> Backend <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ action('BackendVideosController@create') }}"><i class="fa fa-film"></i> Add a video</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ action('BackendCategoriesController@index') }}"><i class="fa fa-list"></i> Show categories</a></li>
                    <li><a href="{{ action('BackendCategoriesController@create') }}"><i class="fa fa-plus"></i> Add category</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-btn fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/backend/profile/'.Auth::user()->id) }}"><i class="fa fa-btn fa-cog"></i> Profile</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                </ul>
            </li>
            @endif

            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a class="" href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Login</a></li>
            @endif
        </ul>
        {!! Form::open(array('url' => 'search', 'class' => 'navbar-form navbar-right', 'role' => 'search')) !!}
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Search...">
                <input type="submit" value="Search" class="form-control">
            </div>
        {!! Form::close() !!}
        
        
                
    </div>
</nav>